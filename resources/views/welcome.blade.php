<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Linkime pasveikti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-weight: 400;
                color: black;
            }

            .links > a{
              color: black;
              font-size: 20px;
              padding: 0 25px;
              text-decoration: none;
              text-transform: uppercase;
              }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('jobs') }}">Grįžti į buvusį puslapį</a>
                    @else
                        <a href="{{ route('login') }}">Prisijungti</a>
                        <a href="{{ route('register') }}">Registruotis</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Linkime pasveikti
                </div>
                <div class="">
                  <img src="img/daktaras.jpg" alt="alternatyva">
                </div>

            </div>
        </div>
    </body>
</html>
