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
      TODO DDU DU DDU DU:
    ( ) habis klik beli di halaman detail varian bakal direct ke sini
    ( ) kalo bisa pas dari halaman detail ke sini tuh ngepass id dorayaki 
        dorayakinya buat dapet info stok dan harga gitu2
    (v) terdapat tombol + - buat stok
    (v) terdapat tombol beli
    (v) harga pada layar realtime (jumlah * harga satuan)
    (v) stok jumlah pembelian maksimal diupdate secara real-time
    (v) stok baru berkurang setelah pencet tombol beli
    ( ) nanganin kasus kalo statechange ga ready
    -->

    <form id="id-produk" method="post">
        <input type="number" name="stok" min="1" max="50" id="stok">
        <button type="submit" name="beli" id="tombol-beli">Beli</button>
    </form>

    <!-- tempat datanya berubah -->
    <div id="container">

        <!-- tampilin harga secara real time disini -->
        <p>Harga: <span id="harga"></span></p>
        <p>Terjual: <span id="terjual"></span></p>
        <p>Stok: <span id="stoknya"></span></p>

    </div>

    <script src="includes/stok.inc.js"></script>
    <script>
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const id = urlParams.get('id')
      document.getElementById('id-produk').action = "includes/kuranginStok.php?id=" + id;
    </script>

</body>
</html>