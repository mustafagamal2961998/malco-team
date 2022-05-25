@extends('layout.header')
@section('title')
    Login
@endsection

@section('content')
    <div class="user-auth-container">
        <div class="user-auth-content">
            <div class="user-auth">
                @if ($errors->any())  
                    <div class="alert alert-ganger">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach 
                        </ul>  
                    </div>          
               @endif
                {{-- LOGIN FORM --}}
               <div class="login-form-box">
                
                    <form action="{{route('user_login')}}" method="POST">
                        <div class="login-form-box-title">
                            <h4>Login</h4>
                        </div>
                        @csrf
                        <div class="login-input">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="login-input">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" name="password" placeholder="Password">  
                        </div>
                        <div class="remember-forgot">
                            <div class="login-input">
                                <div>
                                    <label for="rememberme">
                                        <input type="checkbox" name="rememberme" id="rememberme">
                                        Remember me
                                    </label>
                                </div>
                                <div>
                                    <span>Forgot password</span>
                                </div>
                            </div>
                        </div>
                        <div class="login-input">          
                            <input type="submit" name="login_btn">
                        </div>
                        <div class="login-control">
                            <span class="create-new-account" id="create_new_account">Create a new account</span>
                        </div>
                    </form>
               </div>


               {{-- SIGNUP FORM --}}
               <div class="signup-form-box">
                   
               <form action="{{route('user_registertion')}}"  method="POST" id="user_registertion">
                    <div class="signup-form-box-title">
                        <h4>Create a new account</h4>
                    </div>
                       @csrf
                       <div class="signup-input">
                           <input type="text" name="fname" id="fname" placeholder="First Name">
                       </div>
                       <div class="signup-input">
                           <input type="text" name="lname" id="lname" placeholder="Last Name">
                       </div>
                       <div class="signup-input">
                           <input type="email" name="email" id="email" placeholder="Email Address">
                       </div>
                       <div class="signup-input">
                        <input type="text" name="address" id="address" placeholder="Address">
                       </div>
                       <div class="signup-input">
                            <input type="password" name="password" id="password" placeholder="Password">
                       </div>
                       <div class="signup-input">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                       </div>
                       <div class="signup-input">
                        <input type="text" name="phone" id="phone" placeholder="Phone">
                       </div>
                       <div class="signup-input">
                            <input type="date" name="date" id="date" placeholder="Your Date">
                       </div>
                       <br>
                       <div class="signup-input">
                            <input type="submit" name="user_registertion_btn" id="user_registertion_btn">
                       </div>
                       <div class="signup-control">
                           <span class="login-form" id="show_login_form">Login</span>
                       </div>
                 </form>
               </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.footer')