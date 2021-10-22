<?php
session_start();

require_once 'includes/functions.inc.php';

checkCookie(); // cek masih login ga
$id = $_COOKIE['id'];

class MyDB extends SQLite3 {
    function __construct() {
        $this->open('includes/dorayaki.db');
    }
}

$db = new MyDB();

$query = "
    SELECT * FROM riwayat
    WHERE id_user = $id
    ORDER BY date(time) DESC;
    ";
$temp = $db->query($query);

// var_dump($row);
?>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>Nama</th>
		<th id="jumlah-pengubahan"></th>
		<th id="total-harga">Total harga</th>
		<th>Waktu</th>
	</tr>

    <?php while( $row = $temp->fetchArray() ) : ?>
	<tr>
		<td><a href="includes/displayVariant.inc.php?id=<?= $row["id_dorayaki"] ?>"
        ><?= $row["nama_dorayaki"]; ?></a></td>
		<td><?= $row["jumlah_pengubahan"]; ?></td>
		<td id="total-harga1"><?= $row["total_harga"]; ?></td>
		<td><?= $row["time"]; ?></td>
	</tr>
    <?php endwhile; ?>

</table>

<?php 
if( isset($_SESSION['level'])) {
    if($_SESSION['level']=='admin' ) {
        // hide harga dan nama kolom
        echo "<script src='includes/bedainTampilan.js'></script>";
        echo "<script>hideAttributebyId('total-harga')</script>";
        echo "<script>hideAttributebyId('total-harga1')</script>";
        echo "<script>attribute('jumlah-pengubahan','Jumlah Pengubahan')</script>";

    } elseif ($_SESSION['level']=='user') {
        // nama kolom
        echo "<script src='includes/bedainTampilan.js'></script>";
        echo "<script>attribute('jumlah-pengubahan','Jumlah Pembelian')</script>";
    }
}
?>