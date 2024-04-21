<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Website')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Custom CSS -->
    <style>
        /* Tambahkan gaya kustom Anda di sini */
        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }
        .footer {
            background-color: #05031a;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .custom-navbar {
        background-color: #05031a; /* #08090a  #222823*/
    }
    </style>
</head>
<body style="height: 100%;">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">Personal Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('home')}}">Home</a>
                </li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('portfolio')}}">Portfolio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <span>&copy; 2024 Personal Website. All rights reserved.</span>
    </div>
</footer>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
