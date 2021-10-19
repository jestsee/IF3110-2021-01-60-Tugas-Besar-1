<?php 
    session_start();
?>

<div class="split left">
    <h1></h1>
</div>
<div class="split right">
    <div class="centered">
        <section class="signin-form">
            <link href="../css/dashboardstylesheet.css" rel="stylesheet">
            <h2>Admin Page</h2>
            <form action="displayDorayaki.inc.php" method="post">
                <button type="submit" name="submit">Display Dorayaki</button>
            </form>
            <form action="../insertVariantPage.php" method="post" enctype="multipart/form-data">
                <button type="submit" name="submit">Insert New Variant</button>
            </form>
        </section>
    </div>
</div>