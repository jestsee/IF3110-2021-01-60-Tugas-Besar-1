<?php

function emptyInputSignIn($usn, $pw) {
    $result = false; // deklarasi variabel
    if(empty($usn) || empty($pw)) {
        $result = true;
    }
    return $result;
}

function displayAlert($message) {
    echo '<script language="javascript">';
    echo 'alert("'.$message.'")';
    echo '</script>';
}
