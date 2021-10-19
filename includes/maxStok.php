<?php

require 'dorayakiFunctions.php';

$id = $_GET['id'];

$arr = getInfoById($id);
$max = $arr[1];
$harga = $arr[2];

// echo $max;
echo json_encode($arr);
?>