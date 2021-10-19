<?php
    session_start();
    include_once "register.php";

    //connect to db
    $pdo = new PDO('sqlite:user.db');

    if(isset($_POST["submit"])) {
        $newusername = $_POST["usernamebaru"];
        $newpassword = $_POST["passwordbaru"];
        $newemail = $_POST["emailbaru"];

        //cek username
        //cek email 
        //add user baru 
        if((isset($_POST["usernamebaru"])) && (isset($_POST["passwordbaru"])) && (isset($_POST["emailbaru"]))){
            addnewuser($newusername,$newpassword,$newemail);
            $_SESSION['login'] = true;
            setcookie('id', $row['id'], time()+60,'/');
            setcookie('key', hash('sha256', $usn), time()+60,'/');
            $_SESSION['level'] = 'user';
            header("location: ../index.php");
        }else{
            header("location: ../register.php");
        }
    }
?>