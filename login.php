<?php
session_start();
include "db_connect.php";
   $email      =($_POST["email"]);
  $password   =($_POST["password"]);

  $cekuser="SELECT * FROM user_data WHERE user_email='$email'";
  $query=mysqli_query($conn, $cekuser);
  $hasil= mysqli_num_rows($query);

    if($hasil==1){
   $baris=mysqli_fetch_assoc($query);
   if(password_verify($password, $baris["user_password"])){
    // var_dump($baris);
    $_SESSION["user_id"]         = $baris["user_id"];
    $_SESSION["user_email"]      = $baris["user_email"];
    $_SESSION["user_nama"]       = $baris["user_nama"];
    $_SESSION["user_password"]   = $baris["user_password"];
    $_SESSION["user_contact"]    = $baris["user_contact"];
    echo"anda sudah login";
    header("Location: main.php?page=home");
    var_dump($_SESSION);
   }
   else{
       echo"password salah";
       echo' <a href="main.php?page=home">KEMBALI KE HOME</a> ';
   }
  }
  else{
      echo"pastikan email anda benar";
      echo' <a href="main.php?page=home">KEMBALI KE HOME</a> ';  
  }
?>