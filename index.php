<?php

    // INI SEMUA DITAROH DI HALAMAN DIRECT SETELAH SIGNIN.INC.PHP
    session_start();

    // cek cookie 
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        
        // ambil infonya dulu
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // cek keynya cocok ga
        // kalo cocok set session
        if($key === hash('sha256','user1')) {
            $_SESSION['login'] = true;
        }

    } else {
        
        // cookienya ga ada, cek session ada ga
        if(isset($_SESSION['login'])) {
            header("location: logout.php");
        } // session ada, dibikin logout
    }

    // cek udah login atau belom, kalo belom balik ke login page
    if(isset($_SESSION['login'])) {
        echo "met ya udh login<br>";
        if(isset($_SESSION['level'])) {
            // diarahkan ke admin
            if ($_SESSION['level']=='user') {
                
            }
            else if ($_SESSION['level']=='admin') {
                header("location: ../tugas-besar-1/includes/admin.php");
            }
        }
        echo "<br><a href=\"logout.php\">logout disini</a>";
    } else {
        echo "login dulu bro";
        echo "<br><a href='login.php'>login disini</a>";
    }

    // TODO: kalo cookie nya habis, ada cek session otomatis?
?>
<?php
require_once 'includes/functions.inc.php';

// menampilkan pesan bahwa pembelian berhasil dilakukan
if (isset($_GET['pembelian'])) {
    displayAlert('Pembelian berhasil');
}

?> 
<!--
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/dashboardstylesheet.css">
    </head>
    <body>
            <div class="header">
            <ul>
                <li class="navitemleft"><a href="#home"><img src="logos.png" width="150" height="35" style="padding: 0; margin: 0;"></a></li>
                <li class="navitemsearch"><input type="text" placeholder="Search here :D"></li>
                <li class="navitem" ><a href="#login">Login</a></li>
                <li class="navitem" ><a href="#news">News</a></li>
                <li class="navitem" ><a href="#about">About</a></li>
            </ul>
            </div>
            <div class="wrapper">
                <div class="isi">
                    <div class="responsif">
                        <div class="gambar">
                            <a href="logos.png"><img src="dorayaki1.jpg" alt="Gambar Dorayaki" width="20" height="20">
                                <div class="deskripsi">
                                    Deskripsi dorayaki disini ya
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <div class="responsif">
                        <div class="gambar">
                            <a href="logos.png"><img src="dorayaki1.jpg" alt="Gambar Dorayaki" width="20" height="20">
                                <div class="deskripsi">
                                    Deskripsi dorayaki disini ya
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <div class="responsif">
                        <div class="gambar">
                            <a href="logos.png"><img src="dorayaki1.jpg" alt="Gambar Dorayaki" width="200" height="200">
                                <div class="deskripsi">
                                    Deskripsi dorayaki disini ya
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <div class="responsif">
                        <div class="gambar">
                            <a href="logos.png"><img src="dorayaki1.jpg" alt="Gambar Dorayaki" width="200" height="200">
                                <div class="deskripsi">
                                    Deskripsi dorayaki disini ya
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="responsif">
                        <div class="gambar">
                            <a href="logos.png"><img src="dorayaki1.jpg" alt="Gambar Dorayaki" width="200" height="200">
                                <div class="deskripsi">
                                    Deskripsi dorayaki disini ya
                                </div>
                            </a>
                        </div>
                    </div>
            </div>

            <div class="footer">
                <ul class="isifooter">
                    <li class="isifooterli"><a href="about.html">About</a></li>
                    <li class="isifooterli"><a href="privacypolicy.html">Privacy Policy</a></li>
                    <li class="isifooterli"><a href="disclaimer.html">Disclaimer</a></li>
                </ul>
            </div>
    </div>
    </body>
</html> -->