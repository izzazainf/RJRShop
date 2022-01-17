<?php 
session_start();
include "../../db_connect.php";

    $plama=$_POST['paslama'];
    $pbaru=$_POST['pasbaru'];
    $konfirmasi=$_POST['konfirmasi'];
    $user_email=$_SESSION['user_email'];

    //Melakukan pemanggilan database sesuai email yang dimasukkan
    $user="SELECT * FROM user_data WHERE user_email= '$user_email' ";
    $query=mysqli_query($conn, $user);
    $tabel = mysqli_fetch_assoc($query);
    //mengecek apakah password lama sudah sesuai
    //-jika sesuai
    if(password_verify($plama, $tabel["user_password"]))
    // if($plama== $tabel["user_password"])
    {
        echo"password sama";
        
        if($pbaru == $konfirmasi)
        {
            $pbaru=password_hash($pbaru, PASSWORD_DEFAULT);
            
            $update="UPDATE user_data SET
            user_password = '$pbaru'
            WHERE
            user_email = '$user_email' ";
            $query=mysqli_query($conn, $update);
            echo"sukses ganti";
            header("Location:../../main.php");
            
        }
        else
        {
            echo"password beda boy";
        }
        

    }
    //-jika tidak sesuai
    else
    {
        header("Location:editpasword.php?error=paswordsalah");
    }
    

?>