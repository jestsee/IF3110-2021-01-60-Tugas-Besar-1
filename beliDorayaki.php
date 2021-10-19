<?php

// pembeli hanya dapat mengurangi stok
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- tempat datanya berubah 
      CATATAN:
    - habis klik beli di halaman detail varian bakal direct ke sini
    - kalo bisa pas dari halaman detail ke sini tuh ngepass indeks 
      dorayakinya buat dapet info stok dan harga gitu2
    - terdapat tombol + - buat stok
    - terdapat tombol beli
    - harga pada layar realtime (jumlah * harga satuan)
    - stok jumlah pembelian maksimal diupdate secara real-time
    - stok baru berkurang setelah pencet tombol beli
    -->

    <form action="" method="post">

        <input type="number" min="1" max="50" id="stok">
        <button type="submit" id="tombol-stok">submit</button>

    </form>

    <!-- tempat datanya berubah -->
    <div id="container">

        <!-- tampilin harga secara real time disini -->
        <p>Harga: <span id="harga"></span></p>

    </div>

    <script src="includes/stok.inc.js">
    </script>
</body>
</html>