<?php

    session_start();

include_once "connection.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title> USER PAGE</title>
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
                width:200px;
                height:100px;
                }

            </style>
    </head>
    <body> 
        
        <div class="container">
            <div class="row">
                <div class="col-3 ">
                    <ul class="list-group justify-content-end"> 
                        <li class="justify-content-end  list-group-item">
                            <button class="btn  btn-lg btn-info " onclick=update_info()> UPDATE INFO</button>
                        </li>
                        <li class="justify-content-end list-group-item ">
                            <button class="btn  btn-lg btn-warning " onclick=delete_cus()> DELETE CUSTOMER</button>
                        </li>
                        <li class="justify-content-end list-group-item ">
                            <button class="btn  btn-lg btn-success " onclick=log_out()> LOG OUT</button>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-9">
                    <img  width="300" height="300" src="data:image/jpeg;base64,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">
                    <img width="300" height="300" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6J2EYu_jfveJYa8h1d5vBcUhYjaNnu5jZ3Q&usqp=CAU">
                    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
                    <h2>Your appointments:</h2>
                </div>
               
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 btn-group">
                    
                            <button class="btn btn-lg btn-primary basit" id="facial_care" onclick=facial_care()>FACIAL CARE</button>
                       
                        
                            <button class="btn btn-lg btn-danger basit" id="hair_care" onclick=hair_care()>HAIR CARE</button>
                        
                        
                            <button class="btn btn-lg btn-warning basit" id="hand_foot_care" onclick=hand_foot_care()>HAND-FOOT CARE</button>
                        
                        
                            <button class="btn btn-lg btn-info basit" id="spa_sauna_massage" onclick=spa_sauna_massage()>SPA-SAUNA-MASSAGE</button>
                       
                        
                   
            </div>
           
        </div>
        
        
            
        <script>
            function update_info(){
            window.location.href = "update_info.php";
            }
            function delete_cus(){
                window.location.href = "delete_cus.php";
            }
            function log_out(){
                window.location.href = "log_out.php";
            }
                
        function facial_care(){
            window.location.href = "make_app.php";
           
        }
        function hair_care(){
            window.location.href = "make_app.php";
           
         }
        function hand_foot_care(){
            window.location.href = "make_app.php";
            
        }
        function spa_sauna_massage(){
            window.location.href = "make_app.php";
            
        }

        </script>
   
   
</body>
</html>





