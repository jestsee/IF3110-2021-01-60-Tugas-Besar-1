<?php
session_start();

// krn belum ada db, pake dummy
// $usn1 = "user1";
// $pw1 = "password1";
include_once "dorayakiFunctions.php";

$db = new MyDB();

if(isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $desc = $_POST["desc"]; 
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    // TODO: upload gambar
    // dummy dulu aja
    $img = "sss";
    
    insertVariant($name, $desc, $price, $stock, $img);
} 
