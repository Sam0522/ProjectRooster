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
                <!DOCTYPE html>
<html>
<body>

<p>How to delete properties of an array.</p>

<p id="demo"></p>



<style>
  body {
     font-family: verdana; 
     font-size: 12px;
     }
  .tblA{ 
      border-collapse: collapse;
      background-color: grey;
      border:1px solid black; 
      }
  .tblA td {
      border:1px solid black; 
      padding: 3px; 
      white-space: nowrap;
      background-color: grey;
      }
      .thh{
          padding:20px;
          background-color: grey;
          border:1px solid black; 
      }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<div id="content">
<link rel ="stylesheet" href="css/Ajax.css">


<div id="divA"></div>
<!-- <script>  function laadBierTabel2(){

      

$.getJSON( "http://api.openweathermap.org/data/2.5/forecast?q=Zwolle&appid=6e4827081fe4da6edb58eb5484686f27&units=metric", function( json ){
 console.log( "json:", json);



let p = $("<b>");

p.append( $("<b>").html('weer in '));
p.append( $("<b>").html(weer.name));
});
$("#divA").append(p);
});


}
</script> -->





<script type="text/javascript">
 
    function laadBierTabel(){

      

      $.getJSON( "https://std.stegion.nl/api_roster/?item=group&value=AO2B", function( json ){
       console.log( "json:", json);









  let tbl = $("<tabel>").addClass("tblA");
  let tr = $("<tr>");
    // tr.append( $("<th>").html("Datum-Tijd"));
    // tr.append( $("<th>").html("tempratuur"));
    // tr.append( $("<th>").html("LuchtVochtigheid"));
    // tr.append( $("<th>").html("druk"));
    // tr.append( $("<th>").html("Bewolking"));
    // tr.append( $("<th>").html(""));
    // tr.append( $("<th>").html("Wind"));

    

    tbl.append(tr);
  
 $(json.data).each(function (key, weer)
  {
      


let tr = $("<th>");

  
    
    // tr.append( $("<td>").html(weer.name));
    tr.append( $("<th>").addClass("thh").html(weer.date_f ));
    tr.append( $("<th>").addClass("thh").html(weer.data) );
    // tr.append( $("<td>").html(weer.main.humidity+ "%"));
    // tr.append( $("<td>").html(weer.main.pressure+ "hPa"));
    
    

    tbl.append(tr);
  });
  
  $("#divA").append(tbl);
});






}

laadBierTabel();




</script> 
















<script>

    






</script>

</body>
</html>

                </div>
                <div>
                <b>Deze website wordt beveiligd door de Skerpskutter Aapie.</b>
                </div>
            </div>
        </div>
    </body>
</html>