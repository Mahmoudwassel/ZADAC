<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,700;0,800;1,500&family=Nunito+Sans:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet"
    />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Philosopher&display=swap');
    </style>
    <!--  icon -->
    <link rel="shortcut icon" href="{{asset('images/knitting.png')}}" type="icon" />
    <!--  css -->
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-spy">
    
    <!-- //////start nav////////////////////////////////////////////////////////////////// -->
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar-spy">
    <div class="container">
        <a class="navbar-brand logo fw-bold fs-2" href="#">ZADAC<span class="dot">.</span></a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="nav-link "  href="{{route('home')}}">Home</a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link "  href="{{route('show card')}}">Cart</a>
            </li> --}}
            
            <li class="nav-item">
                <a class="nav-link" href="">Find</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link "   href="{{route('show card')}}">
                <i class="fa-solid fa-cart-shopping text-main position-relative" >
                <span  class="position-absolute bg-danger text-white"> {{count((array) session('cart'))}} </span></i>
            </a>
            </li>
            <li>
                @if (Route::has('login'))
                    @auth
                        <div class="dropdown">
                            <button class="btn signoutColor dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </button>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Log Out</button>
                            </form>
                        </div>
                    @else
                    <a class="nav-link bold " href="{{route('login') }}" style="font-family:blue">Log in</a>
                @endauth
            @endif
            </li>
        </ul>
        </div>
    </div>
    </nav> 
    <!-- ///////end nav///////////////////////////////////////////////////////////////// -->
    <!-- header -->
    @yield('content')

<br>
    <!-- start footer -->
    <footer>
        <div class="footerContainer text-white w-100 text-center d-flex align-content-center gap-3 flex-wrap">
            <h1 class="m-0 w-100 navbar-brand logo fw-bold fs-2">ZADAC STORE.</h1>
            <div class="footerIcons m-0 w-100 d-flex gap-3 justify-content-center fs-5 ">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-snapchat"></i></a>
            </div>
    </footer> 
        <!-- end footer -->