<?php
    // OPEN DATABASE
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('user.db');
        }
    }
    $db = new MyDB(); //harus ada ini di setiap fungsi

    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

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
        if(!$ret){
            echo $db->lastErrorMsg();
        } else {
            echo "Successfully executed<br>";
        }
        // $db->close();
    }

    // menambah user setelah register(?)
    function addUser($id, $email, $username, $password, $is_admin) {
        $query ="
        INSERT INTO user(id, email, username, password, is_admin)
        VALUES ('$id', '$email', '$username', '$password', '$is_admin');";
        
        execute($query);
    }

    addUser("1","lala@gmail.com", "lala", "l4l4", 0);
    
    $db->close(); 