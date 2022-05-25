<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StartController extends Controller
{
    public function start(){

        return view('dashboard.start');
    }
    public function logout(){
        
        Auth::logout();
        return redirect(url('/'));
    }
}
