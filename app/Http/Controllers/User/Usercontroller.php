<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\Testmail;
use App\Mail\VerificationEmail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class Usercontroller extends Controller
{


    // Get login page
    public function loginRoute(){
        return view('login');
    }


    public function user_registertion(Request $request){
        $request->validate([
            'fname'=>'required|max:100',
            'email'=>'required|email|unique:users',
            'address'=>'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'password'=>'required|confirmed|min:6',
            'phone'=>'required|regex:/(01)[0-9]{9}/',
            'date'=>'required'
        ]);
        
        $registertion = User::create([
            'name' => $request->fname .' '.$request->lname,
            'email' => $request->email,
            'address'=>$request->address,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'birth_date' => $request->date
        ]);
        


    }



    public function user_login(Request $request){
            // Validation Inputs
            $validated = $request->validate([
                'email'=>'required',
                'password'=>'required|min:6'
            ]);
            /* Check if email_verified_at is empty or not empty 
            // if is empty [ The Email ] be not Verified = false
            // if is not empty [ The Email ] be Verified = true
            */ 


            // $userCheck = User::where('email' ,'=' , $request->email)->first();
            // if(empty($userCheck->email_verified_at)){
            //      return Redirect::back()->withErrors(['msg' => 'Email not verifoction']);
            // }  
            // else{
                 
            // }



            // if email is verified this step be Loging to this email
            $isLogged = Auth::attempt([
                'email'=>$request->email,'password'=>$request->password
            ]);

            
        // Check if not login redirect [ error msg ] 
        if(!$isLogged){ 
           
            return Redirect::back()->withErrors(['msg' => 'Your email or password wrong']);
        }
        // if email login successfull redirect to dashboard
        return redirect(url('dashboard'));
       
    }
}
