@extends('layout.master')

@section('title', 'About')

@section('content')
    <style>
        /* Tambahkan gaya kustom Anda di sini */
        body {
            font-family: Georgia, sans-serif
        }
        .jumbotron {
            background-image: url('https://i.pinimg.com/236x/c1/a8/22/c1a822e6691df80d2f23b3671b640bef.jpg'); /* Ganti dengan URL gambar latar belakang Anda */
            background-size: cover;
            color: #222823;
            text-align: center;
            padding: 100px 0;
            animation: slideInTop 1s ease-out, fadeIn 1s ease-out; /* Slide in from top and fade in animation */
        }
        @keyframes slideInTop {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        /* Additional animation for the "About Me" section */
        #about {
            animation: fadeInUp 1s ease-out; /* Fade in and slide up animation */
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Additional animation for the profile image */
        .img-profile {
            animation: rotateIn 1s ease-out; /* Rotate in animation */
        }
        @keyframes rotateIn {
            from {
                transform: rotate(0);
                
            }
            to {
                transform: rotate(0);
            }
        }
        .about{
            
        }
    </style>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to My Personal Website</h1>
            <p>This is a template for your personal website built with Laravel and Bootstrap.</p>
            <a href="{{url('about')}}" class="btn btn-primary btn-lg ">Learn More</a>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Me</h2>
                    <p>{{$data->deskripsi}}</p>
                </div>
                <div class="col-md-6">
                    <img src="{{$data->image}}" alt="Profile Image" class="img-fluid rounded-circle img-profile" width="200">
                </div>
            </div>
        </div>
    </section>
@endsection
