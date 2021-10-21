<div class="split left">
    <h1></h1>
</div>
<div class="split right">
    <div class="centered">
        <section class="signin-form">
            <link href="css/dashboardstylesheet.css" rel="stylesheet">
            <h2>Insert New Variant</h2>
            <form action="includes/insertVariant.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Nama..." required="required"><br>
                <input type="text" name="desc" placeholder="Deskripsi..." required="required"><br>
                <input type="number" name="price" placeholder="Harga..." required="required"><br>
                <input type="number" name="stock" placeholder="Stok..." required="required"><br>
                <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*" required="required"><br><br>
                <button type="submit" name="submit">Add</button>
                <br><br>
            </form>

        </section>
    </div>
</div>

    <script src="insertVariant.js"></script>
    <script>
    </script>