<!DOCTYPE html>
<html>
    <head>
        <title> BUTTERFLY BEAUTY CENTER</title>
    </head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
<?php

$db_host = "sql209.epizy.com"; //bağlantının adresi
$db_username = "epiz_31693398";
$db_userpass = "yXxpH6WHI5";
$db_name = "epiz_31693398_cmnhmyr";

$db_con = mysqli_connect($db_host, $db_username, $db_userpass, $db_name);
if(!$db_con){
    echo "<div class='alert alert-danger'>
    <strong>Danger!</strong> 
   <h9> Database connection Unuccessful !!</h9>
  </div>";
}else{
    echo "<div class='alert alert-info'>
    <strong>Info!</strong> 
    <h9>Database connection Successful !!</h9>
     </div>";
    //echo "Veri tabanı bağlantısı başarılı!! ";
}

?>