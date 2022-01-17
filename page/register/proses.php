<?php
session_start();
require "../../db_connect.php";
if (isset($_POST["daftar"])) {
	// ambil data hasil submit dari form
	$nama           = ($_POST["nama"]);	
	$email          = ($_POST["email"]);
    $password       = ($_POST["password"]);
	$password2      = ($_POST["password2"]);

  if($password!==$password2){
    header("Location:../../main.php?page=register&&alert=password");
  }
  else{
    $query_email = mysqli_query($conn, "SELECT user_email FROM user_data WHERE user_email='$email'");    
    $row_email   = mysqli_num_rows($query_email);
    var_dump($row_email);
    if($row_email > 0){
        echo "email ada";
        header("Location:../../main.php?page=register&&alert=email");
    }
    else{
        $password=password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user_data VALUES('', '$nama', '$email', '$password', '')";	    
        mysqli_query($conn, $query);
        header("Location:../../main.php?page=register&&alert=sukses");
    }
  }
    
}
  

?>