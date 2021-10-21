<?php
$id = $_GET['id'];

if(isset($_POST["beli"])) {
    $stokInput = $_POST["stok"];

    require_once 'dorayakiFunctions.php';
    require_once 'functions.inc.php';

    // harus tetep masukin parameter id nya ke url
    if (empty($stokInput)) {
        header("location: ../beliDorayaki.php?id=".$id);
        exit();
    }

    // kurangin stok di database by id
    beliDorayaki($id,$stokInput);
    echo 'beli oi'. $id. $stokInput;

    // kasih pesan pembelian berhasil dilakukan di halaman berikutnya
    // header("location: ../index.php?pembelian=true");

}

else {
    header("location: ../beliDorayaki.php?id=".$id);
    exit();
}