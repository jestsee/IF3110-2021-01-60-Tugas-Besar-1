<?php
    session_start();
    include_once "includes/functions.inc.php";

    // menangani error
    if(isset($_GET["error"])) {
        // ada kotak yang masih kosong
        if ($_GET["error"] == "emptyinput") {
            displayAlert("Ayo sign in yang benar");
        }
    }

    // cek cookie
    // if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    //     // ambil infonya dulu
    //     $id = $_COOKIE['id'];
    //     $key = $_COOKIE['key'];

    //     // cek keynya cocok ga
    //     // user1 dummy
    //     if($key === hash('sha256','user1')) {
    //         $_SESSION['login'] = true;
    //     }
    // }

    if(isset($_COOKIE['key'])) {
        header("location: index.php");
    }
?>


<section class="signin-form">
    <link href="css/login.css" rel="stylesheet">
    <h2>Login</h2>
    <form action="includes/signin.inc.php" method="post">
        <input type="text" name="usn" placeholder="Username...">
        <input type="password" name="pw" placeholder="Password...">
        <button type="submit" name="submit">login</button>
        <br>
        <button type="submitadmin" name="submitadmin">login as admin</button>
    </form>

</section>