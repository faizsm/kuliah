<html>
<head>
    <title>faiz 11220027 latihan6</title>
</head>
<body>
    <form method="POST" action="">
    masukan nama : <input type="text" name="nami" size="20" maxlength="80" required> <br> <br>
    jenis kelamin : <input type="radio" name="jk" value="L">
    Laki - laki <input type="radio" name="jk" value="P" checked>Perempuan <br><br>
    <input type="submit" name = "tombol" value="OK">
    </form>
<?php
if(isset ($_POST["tombol"])){
    echo"data yang diterima cara ke 1 <br>";
    $a = $_POST('nami');
    $b = $_POST('jk');
    echo"nama = $a <br>";
    echo"jenis kelamin = $b <br>";

}
?>
</body>
</html>