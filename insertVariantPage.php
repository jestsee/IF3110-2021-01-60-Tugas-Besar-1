<div class="split left">
    <h1></h1>
</div>
<div class="split right">
    <div class="centered">
        <section class="signin-form">
            <link href="css/dashboardstylesheet.css" rel="stylesheet">
            <h2>Insert New Variant</h2>
            <form action="includes/insertVariant.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Nama..."><br>
                <input type="text" name="desc" placeholder="Deskripsi..."><br>
                <input type="text" name="price" placeholder="Harga..."><br>
                <input type="text" name="stock" placeholder="Stok..."><br>
                <input type="file" id="fileToUpload" name="fileToUpload"><br><br>
                <button type="submit" name="submit">Add</button>
                <br><br>
            </form>

        </section>
    </div>
</div>