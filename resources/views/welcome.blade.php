<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Nuggets - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Bahiana" rel="stylesheet">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="resources/sass/home.css"> -->
        <style>

            html, body, .title-link {
                background-color: #fff;
                color: #41B883;
                /* font-family: 'Nunito', sans-serif; */
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            a {
                text-decoration: none;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-family: 'Bahiana', cursive;
                font-size: 84px;
            }

            .logo {
                height: 60px;
                width: 60px;
                align-items:center;
            }

            .subtitle {
                font-family: 'Nunito', sans-serif;
                color: #636b6f;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .podcast-home {
                margin: 50px 0;
            }

            .image {
                margin: 50px 0;
                border-radius: 5px;
            }

            .links > a {
                font-family: 'Nunito', sans-serif;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover {
                transition-timing-function: ease-in-out;
                transition: 0.5s;
                text-shadow: 2px 2px 2px lightgrey;
                color: #41B883;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <a class="title-link" href="/">Nuggets</a>
                </div>

                <div class="subtitle m-b-md">
                    <h3>Le podcast qui croustille dedans vos oreilles.</h3>
                </div>
                
                <div class="logo">
                    <img src="/resources/svg/fried-chicken.svg" alt="nuggets-logo">
                </div>

                <div class="links">
                    <a href="/podcasts">Podcasts</a>
                    <a href="/archives">Archives</a>
                    <a href="/about">Qui sommes-nous ?</a>
                    <a href="/contact">Contact</a>
                    <a href="/login">Login</a>
                </div>

                <div class="podcast-home">
                    <iframe width="100%" height="180" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/317475684&color=%23ff5500&hide_related=true&show_comments=true&show_user=false&show_reposts=false&show_teaser=false&visual=false"></iframe>
                </div>

            </div>
        </div>
    </body>
</html>
