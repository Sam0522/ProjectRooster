<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" type="img\favicon.png" href="img\favicon.png"/>
        <link rel="stylesheet" href="./css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
     
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
      
            @if (Route::has('login'))
                <div class="top-right links">
                <div class="topnav" id="myTopnav">
             <a  style="white-space: break-spaces;"href="./" >  <img class="logo" src="img\aaapie.png" width="8%"> </a>
           
             <a href=" ./">home</a>
             <a href="about/">About us</a>
             <a href="cars/" > Crud</a>
             <a href="https://github.com/Sam0522/PAO">GitHub</a>
             <a href="https://dev.azure.com/aaapie/PAO">Devops</a>
             <a href="rooster/" > Rooster</a>
             
                <!-- <a href="https://blog.laravel.com">Blog</a> -->
              
                    @auth
                        <a class="login" href="{{ url('/home') }}">Logout/Home</a>
                    @else
                        <a class="login" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="login" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                   
            @endif   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i style="font-size:24px; margin-top: 10px;" class="fa fa-bars"></i>
  </a> </div></div>
            <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
            <div class="content">

                <div class="title m-b-md">
                Sam, Joery, Enwer en Antonie <br>
                </div>
                <div class="links">
                    
                </div>
                <div>
                    <img src="img\aaapie.png" width="40%">
                </div>
                <div>
                <b>Deze website wordt beveiligd door de Skerpskutter Aapie.</b>
                </div>
            </div>
        </div>
    </body>
</html>