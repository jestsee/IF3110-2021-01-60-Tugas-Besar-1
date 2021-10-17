<?php

    // INI SEMUA DITAROH DI HALAMAN DIRECT SETELAH SIGNIN.INC.PHP
    session_start();

    // cek cookie
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        // ambil infonya dulu
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // cek keynya cocok ga
        // user1 dummy
        if($key === hash('sha256','user1')) {
            $_SESSION['login'] = true;
        }
    }

    // cek udah login atau belom, kalo belom balik ke login page
    if(isset($_SESSION['login'])) {
        echo "met ya udh login<br>";
        echo "<br><a href=\"logout.php\">logout disini</a>";
    } else {
        echo "login dulu bro";
        echo "<br><a href='login.php'>login disini</a>";
    }

    // TODO: kalo cookie nya habis, ada cek session otomatis?
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>
    <h1>ini hlm awal</h1>
</body>
</html>