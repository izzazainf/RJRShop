<?php
if($_GET['page'] == 'home')
{
    include "page/home/view.php";
}
if($_GET['page'] == 'register')
{
    include "page/register/view.php";
}
if($_GET['page'] == 'profil')
{
    include "page/profil/view.php";
}
if($_GET['page'] == 'riwayat')
{
    include "page/transaksi/riwayat.php";
}
if($_GET['page'] == 'konfirmasi')
{
    include "page/transaksi/konfirmasi.php";
}
if($_GET['page'] == 'unggah')
{
    include "page/transaksi/unggah.php";
}
if($_GET['page'] == 'password')
{
    include "page/password/view.php";
}
if($_GET['page'] == 'item')
{
    include "page/item/view.php";
}


?>