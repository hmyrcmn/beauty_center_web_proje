<?php

include_once "connection.php";

$newcus_name = $_POST["name"];
$newcus_surname = $_POST["surname"];
$newcus_tell = $_POST["tell"];
$newcus_adress = $_POST["adress"];
$newcus_username = $_POST["username"];
$newcus_password = $_POST["password"];

if( isset($_POST["name"]) && isset($_POST["surname"])
&& $_POST["tell"] && $_POST["adress"] && $_POST["username"] && $_POST["password"]
){
    $q = mysqli_query($db_con, "INSERT INTO customer (names,surname,tell,adress,username,passwords) VALUES ('".$newcus_name."','".$newcus_surname."','".$newcus_tell ."','".$newcus_adress."','".$newcus_username."','".$newcus_password."')");
    echo mysqli_error($db_con);

    header("location: index.php");
}else{
    header("location: sign_up.php");
}


?>