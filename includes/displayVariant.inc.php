<?php
echo('<link rel="stylesheet" href="../css/dashboardstylesheet.css" type="text/css">'); 
session_start();

include_once "dorayakiFunctions.php";

// $db = new MyDB();

if(isset($_POST["detail"])) {
    $id = $_POST["detail"];
    displayDetail($id);
} elseif(isset($_GET["id"])){
    $id = $_GET["id"];
    displayDetail($id);
} else {
    
}
?>

<html lang="en">

<head>
  <title id="title"></title>
  <link href="../css/displayVariant.css" rel="stylesheet">
</head>

<body>
    
  <div class="wrapper">
    <div class="product-img">
      <img height="420" width="327" id="foto">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1 id="nama"></h1>
        <p id="deskripsi"></p>
      </div>
      <div class="product-price-btn">
        <p id="harga"><span></span>Rp</p>
        <form id="cart" method="POST">
            <button type="submit" name="submit">Beli</button>
        </form>
      </div>
    </div>
  </div>
  <script src="display.js"></script>
  <script>
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const id = urlParams.get('id')
    //   console.log(id);
    //   bookDetails(books[id]);
      

      document.getElementById('cart').action = "../beliDorayaki.php?id=" + id;
      <?php
        $id = $_GET['id'];
        $row = getDetailbyId($id);

        $nama = $row['nama'];
        $deskripsi = $row['deskripsi'];
        $harga = $row['harga'];
        $foto = $row['gambar'];
        
        echo "displayVariant('$nama', '$deskripsi', $harga, '$foto');";
      ?>
  </script>

</body>

</html>
