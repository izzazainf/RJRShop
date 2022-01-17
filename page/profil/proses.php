<?php
session_start();
require_once "../../db_connect.php";
if (isset($_POST["ubah"]))
{
    $car=$_SESSION["user_email"];
    // ambil data hasil submit dari form
    $nama           = ($_POST["nama"]);
    $email          = ($_POST["email"]);
    $password       = ($_POST["password"]);
    $contact      = ($_POST["contact"]);

    $update="UPDATE user_data SET
                user_nama = '$nama',
                user_email = '$email',
                user_password = '$password',
                user_contact='$contact'
                WHERE
                user_email = '$car' ";
    $query=mysqli_query($conn, $update);
    echo"data sudah kesimpen bos";
    header("Location:../../main.php?page=profil");
}



?>