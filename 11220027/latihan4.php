<html>
<head>
    <title>faiz 11220027 latihan 4</title>
</head>
<body>
    <form method="POST" action="proses.php">
    <table width="30%" border="0">
        <th colspan="3">DATA MAHASISWA</th>
        <tr>
            <td> masukan nama  </td>
            <td>:</td>
            <td> <input type="text" name="nami" size="20" maxlength="80" required> </td>
        </tr>
        <tr>
            <td> masukan nim  </td>
            <td>:</td>
            <td> <input type="number" name="nim" size="8" maxlength="8" required> </td>
        </tr>
        <tr>
            <td> jenis kelamin  </td>
            <td>:</td>
            <td> <input type="radio" name="jk" value="L"> Laki laki
                 <input type="radio" name="jk" value="P" >Perempuan </td>
        </tr>
        <tr>
            <td> Jurusan  </td>
            <td>:</td>
            <td> <select name="jur" required>
                 <option value="">-- Pilih salah satu --</option>
                <option value="MI"> Manajemen informatika</option>
                <option value="TI"> Teknik informatika</option>
    </select> 
</td>
        </tr>
        <tr>
            <td> syarat  </td>
            <td>:</td>
            <td> <input type="checkbox" name="syarat1">Foto 3x4
                <input type="checkbox" name="syarat2">FC ijazah
                <input type="checkbox" name="syarat3">FC ktp </td>
        </tr>
        <tr>
            <td> saran</td>
            <td>:</td>
            <td> <textarea name="saran" cols="20" rows="2"></textarea></td>
        </tr>
        <tr>
            <th colspan="3">    <input type="submit" value="OK"></td>
        </tr>
    </table>
</form>
</body>
</html>