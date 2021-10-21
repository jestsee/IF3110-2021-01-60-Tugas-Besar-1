<?php
require_once 'dorayakiFunctions.php';
require_once 'functions.inc.php';

session_start();
checkCookie(); // cek masih login ga

$id = $_GET['id'];
$stokInput = $_POST["stok"];
echo $stokInput;

if(isset($_POST["beli"]) && isset($_SESSION['login'])) {
    // harus tetep masukin parameter id nya ke url
    if (empty($stokInput)) {
        header("location: ../beliDorayaki.php?id=".$id);
        exit();
    }

    // kurangin stok di database by id
    beliDorayaki($id,$stokInput);

    // kasih pesan pembelian berhasil dilakukan di halaman berikutnya
    header("location: ../index.php?pembelian=true");

}

elseif (isset($_POST["ubah"]) && isset($_SESSION['login'])) {
    // harus tetep masukin parameter id nya ke url
    if (empty($stokInput)) {
        header("location: ../beliDorayaki.php?id=".$id);
        exit();
    }

    // replace stok dorayaki
    changeStock($id, $stokInput);

    // kasih pesan stok berhasil diubah di halaman berikutnya
    header("location: ../index.php?ubah=true");

}

else {
    header("location: ../beliDorayaki.php?id=".$id);
    exit();
}