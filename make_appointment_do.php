
<?php
session_start();
include_once "connection.php";
if($_SESSION['username']=="" || $_SESSION['username']!= $_POST["username"]){
    session_destroy();
    header("location:index.php");//if not logged in redirect to login page
}else {
    $app_username=$_POST["username"];
    $app_date=$_POST["date"];
    $app_time=$_POST["time"];
    $app_service=$_POST["service"];

    $q = mysqli_query($db_con, "INSERT INTO app (username,app_date,app_time,app_service) VALUES ('".$app_username."','".$app_date."','".$app_time ."','".$app_service."')");
    echo mysqli_error($db_con);
   
    $_SESSION['username']=$app_username;
    $_SESSION['app_date']=$app_date;
    $_SESSION['app_time']=$app_time;
    $_SESSION['service']=$app_service;

    header("location: make_appointment.php");

  session_destroy();
}

?>
