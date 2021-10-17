<?php
    // OPEN DATABASE
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('test.db');
        }
    }
    $db = new MyDB(); //harus ada ini di setiap fungsi

    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    $drop = "DROP TABLE dorayaki;";

    $sql ="
    CREATE TABLE IF NOT EXISTS dorayaki(
        id INTEGER PRIMARY KEY,
        nama TEXT NOT NULL UNIQUE,
        deskripsi TEXT,
        harga INT,
        stok INT,
        gambar TEXT,
        UNIQUE (nama, deskripsi, harga, gambar)
    );";

    // execute($drop);
    execute($sql);

    // FUNCTIONS
    // execute tuh buat perintah kayak update delete insert create drop
    // kalo perintah buat select (yg memperoleh info gt) ga bisa kayaknya
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

    // menambah varian dorayaki baru
    function insertVariant($nama, $deskripsi, $harga, $stok, $gambar) {
        $query ="
        INSERT INTO dorayaki(nama, deskripsi, harga, stok, gambar)
        VALUES ('$nama', '$deskripsi', $harga, $stok, '$gambar');";
        
        execute($query);
    }

    // menambah stok dorayaki sebanyak 1
    function incrementStock($nama) {
        if(dorayakiExist($nama)) {
            $query = "
            UPDATE dorayaki
            SET stok = stok + 1
            WHERE nama = '$nama';";
            
            execute($query);
        }
    }

    // mengurangi stok dorayaki sebanyak 1
    function decrementStock($nama) {
        // cek stoknya ada ga
        $stok = getStock($nama);

        if($stok > 0) {
            $query = "
            UPDATE dorayaki
            SET stok = stok - 1
            WHERE nama = '$nama';";
            
            execute($query);
        } else {
            echo 'stoknya nga ada';
        }
    }

    // ngecek apakah nama varian dorayaki eksis
    function dorayakiExist($nama) {
        global $db;

        $found = false;
        $query = "
        SELECT * 
        FROM dorayaki 
        WHERE nama ='$nama';";

        $result = $db->query($query)->fetchArray();
        if($result) {
            // var_dump($result);
            // echo '<br>';
            // print_r($result);
            // echo '<br>';
            // print($result['nama']);
            $found = true;
        } else {
            echo '<br>Dorayaki not found<br>';
        }

        return $found;
    }

    // liat stok dorayaki berdasarkan nama
    // kalo return -99 berarti dorayaki tidak ditemukan
    function getStock($nama) {
        global $db;
        $stok = -99;

        $query = "
        SELECT stok
        FROM dorayaki
        WHERE nama = '$nama';";

        $result = $db->query($query)->fetchArray();

        if($result) {
            $stok = $result['stok'];
        }

        return $stok;
    }

    // ganti stok dorayaki
    function changeStock($nama, $stok) {
        // stok tidak bisa negatif
        if(dorayakiExist($nama) && $stok>=0) {
            $query = "
            UPDATE dorayaki
            SET stok = '$stok'
            WHERE nama = '$nama';";
            
            execute($query);
        } 
    }

    // menghapus varian dorayaki
        function deleteVariant($nama) {
        $query = "
        DELETE FROM dorayaki 
        WHERE nama = '$nama';";

        execute($query);
    }

    // DRIVER
    // insertVariant('dora','boots',5000, 5, 'pisang');
    // insertVariant('dori','boots',7000, 5, 'pisang');
    // print getStock('dora');
    changeStock('dora',23);
    //deleteVariant('dora');
    
    $db->close(); // taroh diakhir aja

    // ide bonus no 5 & 7
    // Simpan id dari dorayakinya dulu
    // get stok lama
    // get stok baru
