<?php
include "koneksidb.php";

// Inisialisasi variabel
$form_action = "index.php?menu=m_pengguna";
$form_title = "TAMBAH DATA";
$kode_op = "";
$nama_op = "";
$pass = "";
$level = "";
$is_update = false;

if (isset($_GET['id'])) {
    $b = mysqli_query($conn, "SELECT * FROM m_pengguna WHERE id=" . $_GET['id']);
    $c = mysqli_fetch_assoc($b);

    $kode_op = $c['kode_op'];
    $nama_op = $c['nama_op'];
    $pass = $c['pass'];
    $level = $c['level'];
    $is_update = true;
    $form_action = "index.php?menu=m_pengguna&id=" . $_GET['id'];
    $form_title = "UBAH DATA";
}

// Form tambah atau ubah data
echo "<table border='1' width='30%' align='center'>";
echo "<form method='POST' action='$form_action'>";
echo "<tr><th colspan='2'>$form_title</th></tr>";
echo "<tr><td>Kode Operator</td><td>: <input type='text' name='kode_op' value='$kode_op' required></td></tr>";
echo "<tr><td>Nama Operator</td><td>: <input type='text' name='nama_op' value='$nama_op' required></td></tr>";
echo "<tr><td>Password</td><td>: <input type='password' name='pass' value='$pass' required></td></tr>";
echo "<tr><td>Level</td><td>: <select name='level' required>";
if (!$is_update) {
    echo "<option value='' disabled selected>Pilih Level</option>";
}
echo "<option value='Admin'" . ($level == 'Admin' ? ' selected' : '') . ">Admin</option>";
echo "<option value='User'" . ($level == 'User' ? ' selected' : '') . ">User</option>";
echo "</select></td></tr>";
echo "<tr><th colspan='2'><input type='submit' value='OK' name='" . ($is_update ? "tombol_ubah" : "tombol_tambah") . "'></th></tr>";
echo "</form>";
echo "</table>";

if (isset($_POST['tombol_tambah'])) {
    // Tangkap nilai dari form tambah
    $kode_op = $_POST['kode_op'];
    $nama_op = $_POST['nama_op'];
    $pass = $_POST['pass'];
    $level = $_POST['level'];

    // Lindungi dari serangan SQL Injection dengan mysqli_real_escape_string
    $kode_op = mysqli_real_escape_string($conn, $kode_op);
    $nama_op = mysqli_real_escape_string($conn, $nama_op);
    $pass = mysqli_real_escape_string($conn, $pass);
    $level = mysqli_real_escape_string($conn, $level);

    // Insert data ke database
    $b = mysqli_query($conn, "INSERT INTO m_pengguna (kode_op, nama_op, pass, level) VALUES ('$kode_op', '$nama_op', '$pass', '$level')");
    echo "<META http-equiv=refresh content=\"0; URL=index.php?menu=m_pengguna\">";
}

if (isset($_POST['tombol_ubah'])) {
    // Tangkap nilai dari form ubah
    $kode_op = $_POST['kode_op'];
    $nama_op = $_POST['nama_op'];
    $pass = $_POST['pass'];
    $level = $_POST['level'];

    // Lindungi dari serangan SQL Injection dengan mysqli_real_escape_string
    $kode_op = mysqli_real_escape_string($conn, $kode_op);
    $nama_op = mysqli_real_escape_string($conn, $nama_op);
    $pass = mysqli_real_escape_string($conn, $pass);
    $level = mysqli_real_escape_string($conn, $level);

    // Update data di database
    $b = mysqli_query($conn, "UPDATE m_pengguna SET kode_op='$kode_op', nama_op='$nama_op', pass='$pass', level='$level' WHERE id=" . $_GET['id']);
    echo "<META http-equiv=refresh content=\"0; URL=index.php?menu=m_pengguna\">";
}

// Menangani penghapusan data
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // Lindungi dari serangan SQL Injection dengan mysqli_real_escape_string
    $delete_id = mysqli_real_escape_string($conn, $delete_id);
    // Hapus data dari database
    $b = mysqli_query($conn, "DELETE FROM m_pengguna WHERE id='$delete_id'");
    echo "<META http-equiv=refresh content=\"0; URL=index.php?menu=m_pengguna\">";
}

$keyword = '';
if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $keyword = mysqli_real_escape_string($conn, $keyword);
    $query = "SELECT * FROM m_pengguna 
        WHERE kode_op LIKE '%$keyword%' OR nama_op LIKE '%$keyword%' 
        ORDER BY id DESC";
} else {
    $query = "SELECT * FROM m_pengguna 
        ORDER BY id DESC";
}

$a = mysqli_query($conn, $query);
$no = 0;
echo "<br>";
echo "<table border='1' width='80%' align='center'>";
echo "<form method='POST' action=''>";
echo "<tr><td colspan=2>Pencarian</td><td colspan=7><input type=text name=keyword value='$keyword'><input type='submit' name='search' value='CARI'> <input type='submit' value='NORMAL'></td></tr>";
echo "<tr><th> NO </th><th> KODE OPERATOR </th><th> NAMA OPERATOR </th><th> PASSWORD </th><th> LEVEL </th><th colspan=2>AKSI</th></tr>";
echo "</form>";
while ($b = mysqli_fetch_array($a)) {
    $no = $no + 1;
    echo "<tr><td> $no </td> <td> $b[kode_op] </td> <td> $b[nama_op] </td> <td>$b[pass]</td><td>$b[level]</td>";
    echo "<td><a href='index.php?menu=m_pengguna&id=$b[id]'><img src='ubah.png' style='width:25px;height:25px;'></a></td>";
    echo "<td><a href='index.php?menu=m_pengguna&delete_id=$b[id]'><img src='pngwing.com.png' style='width:25px;height:25px;'></a></td></tr>";
}
echo "</table>";
?>

