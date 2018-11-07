<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nuggets - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body, .title-link {
                background-color: #fff;
                color: #41B883;
                font-family: 'Nunito', sans-serif;
                /* font-family: 'Operator Mono Light'; */
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .subtitle {
                color: #636b6f;
            }

            .image {
                margin: 50px 0;
                border-radius: 5px;
            }

            .links > a {
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
                /* text-shadow: 2px 2px 2px lightgrey; */
                color: #41B883;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a {
                text-decoration: none;
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

                <div class="subtitle m-b-md"><h3>Crispy podcasts for your ears to savor.</h3></div>

                <div class="links">
                    <!-- <a href="/">Home</a> -->
                    <a href="/podcasts">Podcasts</a>
                    <a href="/archives">Archives</a>
                    <a href="/about">Qui sommes-nous ?</a>
                    <a href="/contact">Contact</a>
                    <a href="/login">Login</a>
                </div>

                <div class="image">
                    <img src="https://cdn.vox-cdn.com/thumbor/ip3ZS8vs4iM24F2RbxeRsUEgiH4=/320x0:5440x3840/920x613/filters:focal(320x0:5440x3840):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/50023543/20120521-yosemite-327.0.jpg" alt="">
                </div>
            </div>
        </div>
    </body>
</html>
