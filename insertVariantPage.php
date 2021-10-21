<body>
<div class="centered">
    <section class="signin-form">
        <link href="css/variantstylesheet.css" rel="stylesheet">
        <h2>Insert New Variant</h2>
        <form action="includes/insertVariant.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Nama..." required="required"><br>
            <input type="text" name="desc" placeholder="Deskripsi..." required="required"><br>
            <input type="text" name="price" placeholder="Harga..." required="required"><br>
            <input type="text" name="stock" placeholder="Stok..." required="required"><br>
            <label for="fileToUpload">Upload photo</label>
            <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*" required="required"><br><br>
            <!--- TODO: Validasi harga sama stok itu angka, filenya cuma boleh gambar --->
            <button type="submit" name="submit">Add</button>
            <br><br>
        </form>

    </section>
</div>
</body>

    <script src="insertVariant.js"></script>
    <script>
    </script>