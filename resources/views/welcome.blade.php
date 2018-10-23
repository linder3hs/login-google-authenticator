<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #6db9ff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color: white; font-size: 16px;">home</a>
                    @else
                        <a href="{{ route('login') }}" style="color: white; font-size: 16px;">Login</a>
                        <a href="{{ route('register') }}" style="color: white; font-size: 16px;">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">

                <img width="1000" height="500" src="https://d3uqhvickegzu5.cloudfront.net/uploads/2017/07/Two-factor-authentication.jpg" alt="">
                @if(isset($service) && $service == 'github')
          			<p style="text-align:left">
          				<b>Welcome</b> {{ $details->user['name'] }} ! <br>
                  <b> email</b>: {{$details->user['email']}} <br>
                  <b>Repositories:</b> {{$details->user['public_repos']}}<br>
                  <b>Followers:</b> {{$details->user['followers']}}
          			</p>

          			@endif


            </div>
        </div>
    </body>
</html>
