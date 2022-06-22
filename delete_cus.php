<!DOCTYPE html>
<html>
    <head>
        <title>Delete Customer PAGE</title>
        <meta charset="UTF-8">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
           
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 justify-content-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHv5vkV7ErkeEUdEtHmNUl-ikM1o6-HtSf0w&usqp=CAU">
                </div>
            </div>

        </div>
    </body>
</html>
<?php

session_start();
include_once "connection.php";

//$id = $_POST["customer_id"];
if($_SESSION["username"]){
    $del_username=$_SESSION["username"];

    $q = mysqli_query($db_con,"DELETE FROM customer WHERE username=".$del_username."");

   // echo mysqli_affected_rows($db_con)." adet satır bu işlemden etkilendi.<br>";
   
    echo "<div class='justify-content-center w-75 h-10 alert alert-success'>
         <h2>$del_username customer deleted of system.</h2><br>
        </div>";
 
    //echo "<h2>$del_username customer deleted of system.</h2><br>";

    echo "<a href='index.php'><button class=' justify-content-center btn btn-lg btn-success'> MAİN PAGE</button></a>";
    //header("Location: index.php");
   

}else{
   
    echo "<div class='alert alert-warning'>
            <strong>Warning!</strong> 
            You are not logged in.
        </div>";
    echo "<a href='index.php'><button class=' justify-content-center btn btn-lg btn-success'> MAİN PAGE</button></a>";
}
session_destroy();
?>