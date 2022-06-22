<?php

session_start();
include_once "connection.php";
$upcus_name = $_POST["name"];
$upcus_surname = $_POST["surname"];
$upcus_tell = $_POST["tell"];
$upcus_adress = $_POST["adress"];
$upcus_username = $_POST["username"];
$upcus_password = $_POST["password"];

//$id = $_POST["customer_id"];
if($_SESSION["username"]){
    $del_username=$_SESSION["username"];
    $username=$_SESSION["username"];
    $sql="UPDATE customer SET names = $upcus_name, surname=$upcus_surname,tell=$upcus_tell ,adress=$upcus_adress,username=$upcus_username,passwords=$upcus_password WHERE username = $username";
    $q = mysqli_query($db_con, $sql);
    //echo mysqli_error($db_con); 
    
    header("Location: index.php");

    session_destroy();

}else{
    echo "<div class='alert alert-danger'>
    <strong>Danger!</strong> 
   <h9> You are not logged in. !!</h9>
  </div>";
    
}
session_destroy();
?>