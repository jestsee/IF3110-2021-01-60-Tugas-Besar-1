<?php

require 'dorayakiFunctions.php';

$id = $_GET['id'];

$max = getInfoById($id)[1];
echo $max;
?>