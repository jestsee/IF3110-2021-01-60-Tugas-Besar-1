<?php
    //include_once "index.php";
    session_start();
    echo('<link rel="stylesheet" href="../css/dashboardstylesheet.css" type="text/css">'); 
    class MyDB extends SQLite3 { 
        function __construct() { 
            $this->open('includes/dorayaki.db'); 
        } 
    }
    $db = new MyDB();
    
    function gethasilsearch($cari){
        global $db;
        $query = "SELECT * FROM dorayaki WHERE nama LIKE '$cari'";
        echo'<div class="wrapper">
        <div class="isi">';
        $result = $db->query($query);

        while ($user=$result->fetchArray()){
            // TODO: make image clickable with the existing function
            echo "<div class='responsif'> <div class='gambar'> <a href='includes/displayVariant.inc.php?id=" . $user['id'] .  ".'><img src='includes/" . $user['gambar'] . "' alt='Gambar Dorayaki' width='100' height='50'> <div class='deskripsi'> <p>" . $user['nama'] . "</p><p>" . $user['deskripsi']. "</p><p>Harga: " . $user['harga'] . "</p><p>Stok :" . $user['stok'] . "</p></div></a></div></div>";
        }

        echo'</div>
        </div>';
    }
    

    if(isset($_POST["submit"])) {
        echo "<div class='header'><ul>
        <li class='navitemleft'><a href=\"index.php\"><img src='css/logos2.jpg' width='150' height='50' style='padding: 0; margin: 0;'></a></li>
        <form action='search.php' method='post'><li class='navitemsearch'><input type='text' name='cari' placeholder='Search here :D'></li>
        <li class='navitemsearch'><button type='submit' name='submit'>Search</button></li></form>";

        if(isset($_SESSION['level'])) {
            if($_SESSION['level']=='user') {
                echo "<li class='navitem'><a href=\"logout.php\">Log Out</a></li>
                </ul>
                </div>";

                $cari = $_POST['cari'];
                gethasilsearch($cari);
            }
        
            else if ($_SESSION['level']=='admin') {
                echo"<div class='kanan'>";
                echo "<li class='navitem'><a href=\"logout.php\">Log Out</a></li>";
                echo "<li class='navitem'><form action= 'insertVariantPage.php' method='post' enctype='multipart/form-data'><button type='submit' name='submit'>Insert New Variant</button></form></li>
                </div>
                </ul>
                </div>";

                $cari = $_POST['cari'];
                gethasilsearch($cari);
        }
    }
    }
?>
    
