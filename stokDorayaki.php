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

    <form action="" method="post">

        <input type="number" min="1" max="50" id="stok">
        <button type="submit" id="tombol-stok">submit</button>

    </form>

    <!-- tempat datanya berubah -->
    <div id="container">

        <!-- tampilin data disini? -->

    </div>

    <script src="includes/stok.inc.js">
    </script>
</body>
</html>