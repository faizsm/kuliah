<html>
<head>
    <title>faiz 11220027 latihan 4</title>
</head>
<body>
    <form method="POST" action="proses.php">
    masukan nama : <input type="text" name="nami" size="20" maxlength="80" required> <br> <br>
    masukan nim :  <input type="number" name="nim" size="8" maxlength="8" required><br><br>
    jenis kelamin : <input type="radio" name="jk" value="L">
    Laki - laki <input type="radio" name="jk" value="P" checked>Perempuan <br><br>
    jurusan : <select name="jur" required>
        <option value="">-- Pilih salah satu --</option>
        <option value="MI"> Manajemen informatika</option>
        <option value="TI"> Teknik informatika</option>
    </select><br><br>
    syarat : <input type="checkbox" name="syarat1">Foto 3x4
            <input type="checkbox" name="syarat2">FC ijazah
            <input type="checkbox" name="syarat3">FC ktp <br><br>

    saran : <textarea name="saran" cols="20" rows="2"></textarea> <br><br>
    <input type="submit" value="OK">
    </form>
</body>
</html>