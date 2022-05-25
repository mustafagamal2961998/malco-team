<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Include CSS File --}}
    <link rel="stylesheet" href="assist/dashboard/style/main.css">
    <title>@yield('title','unknow')</title>
</head>
<body>
    @section('navbar-content')
       <header>
            <nav class="navbar-container">
                <div class="navbar-content">
                    <div class="navbar-box">
                        <div class="navbar">
                            @auth
                            <ul class="navbar-list-item">
                                <a href=""><li class="navabr-item">{{Auth::user()->name}}</li></a>
                                <a href="logout"><li class="navabr-item">logout</li></a>

                            </ul>  
                            @endauth
                         
                        </div>
                    </div>
                </div>
            </nav>
       </header>
    @show