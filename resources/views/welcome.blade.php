<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Estadisitcas CAAE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .cosa{
                text-align: center;
                font-size: 84px;
            }
             .hola{
                text-align: center;
                font-size: 30px;
            }
             #unach { 
                float: left; 
                margin-left:230px; 
                margin-top:10px;
                height: 90px
            }
            #caae{
                float: right; 
                margin-right:220px;
                height: 100px;
             }
        </style>
        <link rel="icon" href="unach.ico" />
    </head>
    <body>
        <img id="unach"  src="LogoUnach-2.png" />
        <img id="caae"  src="LOGO CAAE.png"  />
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sitio en construcción
                </div>
            </div>
        <br>
            <div class="cosa">
                <div class="hola">
                    Te esperamos de vuelta
                </div>
                
            </div>
        </div>
    </body>
</html>
