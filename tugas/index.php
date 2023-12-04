<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11220027 - Faiz sahrul Muharam</title>
    <link rel="stylesheet" href="style.css">
<body>
    <header>
        <img src="img/header.jpg" width="100%">
    </header>
        <table width="100%" border="1" cellpadding="0" cellspacing="0">
            <tr>
                <td width='20' valign="top" rowspan="2">
                    <nav>
                        <h2 align="center">Menu</h2>
                        <a href="index.php">Beranda</a>
                        <a href="index.php?menu=cv">CV</a>
                        <a href="index.php?menu=galeri">Galeri</a>
                    </nav>
                </td>
                <td>
                <?php
                    if (isset($_GET['menu'])) {
                        if ($_GET['menu'] == 'cv') {
                            include 'cv.php';
                        }
                    } else {
                        echo "Selamat Datang di Website Saya";
                    }

                    if (isset($_GET['menu'])) {
                        if ($_GET['menu'] == 'galeri') {
                            include 'galeri.php';
                        }
                    } else {
                        echo "Selamat Datang di Website Saya";
                    }
                ?>
            </tr>
        </table>
    <footer>
         <img src="img/header.jpg" width="100%">
    </footer>
</body>
</html>
