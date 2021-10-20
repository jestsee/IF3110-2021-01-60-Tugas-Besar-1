<?php
    // OPEN DATABASE
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('user.db');
        }
    }
    $db = new MyDB(); //harus ada ini di setiap fungsi

    // if(!$db) {
    //     echo $db->lastErrorMsg();
    // } else {
    //     echo "Opened database successfully<br>";
    // }

    $drop = "DROP TABLE user;";

    $sql ="
    CREATE TABLE IF NOT EXISTS user(
        id INTEGER PRIMARY KEY,
        email TEXT,
        username TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        is_admin NUMBER(1)
    );";

    // execute($drop);
    execute($sql);

    function execute($query) {
        global $db;
        $ret = $db->exec($query);
        // if(!$ret){
        //     echo $db->lastErrorMsg();
        // } else {
        //     echo "Successfully executed<br>";
        // }
        // $db->close();
    }

    // menambah user setelah register(?)
    function addUser($email, $username, $password, $is_admin) {
        $query ="
        INSERT INTO user(email, username, password, is_admin)
        VALUES ('$email', '$username', '$password', '$is_admin');";
        
        execute($query);
    }

    // addUser("xx@gmail.com", "xx", "x4x4", 1);
    function isUsernameExist($username) {
        global $db;

        $query = "
        SELECT * FROM user
        WHERE username = '$username';
        ";

        $result = $db->query($query)->fetchArray();
        $found = false;

        if($result) {
            $found = true;
        }

        return $found;
    }

    // if (isUsernameExist('lolo')) {
    //     echo 'exist';
    // } else {
    //     echo 'not found';
    // }

    // $db->close(); 