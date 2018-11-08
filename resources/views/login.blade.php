<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Nuggets - Login</title>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="login-wrapper">
                <h2 class="title login-title">Login</h2>
                <input class="login-input-username" type="text" placeholder="Username">
                <input class="login-input-password" type="password" placeholder="Password">
                <input type="submit" class="login-input-submit">
            </div>
            <div class="links login-out">
                <a href="/">Back to home</a>
            </div>
        </div>
    </div>
</body>
</html>