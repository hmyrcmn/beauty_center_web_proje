<?php 
   session_start(); 
   
   require('connection.php'); 
   
   if (isset($_POST['username']) && isset($_POST['password'])){ 
    
                $entcus_username = $_POST["username"];
                $entcus_password = $_POST["password"];

                $sql = "SELECT * FROM `customer` WHERE "; 
                $sql= $sql . "username='$entcus_username' and passwords='$entcus_password'"; 
                $cevap = mysqli_query($db_con, $sql); 
        
            //eger cevap FALSE ise hata yazdiriyoruz.       
        
        if(!$cevap ){ 
            echo '<br>Hata:' . mysqli_error($db_con); 
        } 
        
        //veritabanindan dönen satır sayısını bul 
        
        $say = mysqli_num_rows($cevap); 
        if ($say >= 1){
            $_SESSION['username'] = $entcus_username;
        }else{
            $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 
            session_destroy();
        } 
   
   } 
   
   if (isset($_SESSION['username'])){ 
    header("Location: make_appointment.php"); //if user is logged in, redirect to index.php
   
   }else{
        header("Location: sign_up.php");// if user is not sign up then go to sign up page
    } 
    
     
     
?>