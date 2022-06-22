<?php
include_once "connection.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title> MAIN PAGE</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        
            <style>
                    body{
                        background-repeat: no-repeat;
                    }
                    .basit{
                    border-radius: 100px;
                    width:100px;
                    height:00px;
                    }
                   
</style>

            </style>
    </head>
    <body  >
    
                
    <div class="container">

        <div class="row">
            <div class="col-3 ">
               <img  class="rounded-circle img-responsive" src="https://i.pinimg.com/236x/f9/6e/18/f96e181276ea4255850c30b79361ed74--acrylic-paintings-acrylic-faces.jpg">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center align-self-center fw-bold fst-italic  text-danger bg-danger text-dark">
               WELCOME TO BUTTERFLY BEAUTY CENTER
            </div>
                <div class="col-3 align-self-center">
                    <ul class="list-group ">
                        <li class="list-group-item" >
                            <button class="btn  btn-success btn-lg btn-secondary" onclick=sign_up() >SIGN UP</button>
                        </li>
                        <li class="list-group-item ">
                            <button class="btn  btn-lg btn-danger " onclick=sign_in() >SIGN IN</button>
                        </li>
                        <li class="list-group-item">
                            <button class="btn btn-lg btn-primary" onclick=get_data()> GET DATA</button>
                        </li>
                        <li class="list-group-item">
                            <button class="btn btn-lg btn-warning" onclick=get_app()> GET APP</button>
                        </li>
                        
                       
                    </ul>
                </div>
        </div>
        
    </div>



    <script>
        function sign_up(){
            window.location.href = "sign_up.php";
        }
        function sign_in(){
            window.location.href = "sign_in.php";
        }
       
        function get_data(){
            window.location.href = "get_data.php";
        }
        function get_app(){
            window.location.href = "get_app.php";
        }
        
    </script>
    
    <footer style=" position: absolute; bottom: 0; width: 100%; height: 60px; background-color: #f5f5f5; ">
    <p class="bg-secondary justify-content-center text-warning ">
                <br>&nbsp &nbsp &nbsp &nbsp PREPARED:  HÜMEYRA ÇİMEN 
                &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp BUTTERFLY  BEAUTY CENTER PROJECT PAGE  &nbsp  &nbsp
        
        <a href="https://github.com/hmyrcmn/beauty_center_web_proje">
        <button class="btn btn-lg btn-warning" >
        GITHUB	
        </button>  <br><br>
        </a>
    </p>
    </footer>

    </body>
</html>