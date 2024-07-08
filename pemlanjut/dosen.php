<?php
include "koneksidb.php";

// Inisialisasi variabel
$form_action = "index.php?menu=m_dosen";
$form_title = "TAMBAH DATA";
$id_dosen = "";
$nama_dosen = "";
$is_update = false;

if (isset($_GET['id'])) {
    $b = mysqli_query($conn, "SELECT * FROM m_dosen WHERE id=" . $_GET['id']);
    $c = mysqli_fetch_assoc($b);

    $id_dosen = $c['id_dosen'];
    $nama_dosen = $c['nama_dosen'];
    $is_update = true;
    $form_action = "index.php?menu=m_dosen&id=" . $_GET['id'];
    $form_title = "UBAH DATA";
}

// Form tambah atau ubah data
echo "<table border='1' width='30%' align='center'>";
echo "<form method='POST' action='$form_action'>";
echo "<tr><th colspan='2'>$form_title</th></tr>";
echo "<tr><td>ID Dosen</td><td>: <input type='number' name='id_dosen' value='$id_dosen' required></td></tr>";
echo "<tr><td>Nama Dosen</td><td>: <input type='text' name='nama_dosen' value='$nama_dosen' required></td></tr>";
echo "<tr><th colspan='2'><input type='submit' value='OK' name='" . ($is_update ? "tombol_ubah" : "tombol_tambah") . "'></th></tr>";
echo "</form>";
echo "</table>";

if (isset($_POST['tombol_tambah'])) {
    // Tangkap nilai dari form tambah
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];

    // Lindungi dari serangan SQL Injection dengan mysqli_real_escape_string
    $id_dosen = mysqli_real_escape_string($conn, $id_dosen);
    $nama_dosen = mysqli_real_escape_string($conn, $nama_dosen);

    // Insert data ke database
    $b = mysqli_query($conn, "INSERT INTO m_dosen (id_dosen, nama_dosen) VALUES ('$id_dosen', '$nama_dosen')");
    echo "<META http-equiv=refresh content=\"0; URL=index.php?menu=m_dosen\">";
}

if (isset($_POST['tombol_ubah'])) {
    // Tangkap nilai dari form ubah
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];

    // Lindungi dari serangan SQL Injection dengan mysqli_real_escape_string
    $id_dosen = mysqli_real_escape_string($conn, $id_dosen);
    $nama_dosen = mysqli_real_escape_string($conn, $nama_dosen);

    // Update data di database
    $b = mysqli_query($conn, "UPDATE m_dosen SET id_dosen='$id_dosen', nama_dosen='$nama_dosen' WHERE id=" . $_GET['id']);
    echo "<META http-equiv=refresh content=\"0; URL=index.php?menu=m_dosen\">";
}

// Menangani penghapusan data
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // Lindungi dari serangan SQL Injection dengan mysqli_real_escape_string
    $delete_id = mysqli_real_escape_string($conn, $delete_id);
    // Hapus data dari database
    $b = mysqli_query($conn, "DELETE FROM m_dosen WHERE id='$delete_id'");
    echo "<META http-equiv=refresh content=\"0; URL=index.php?menu=m_dosen\">";
}

$keyword = '';
if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $keyword = mysqli_real_escape_string($conn, $keyword);
    $query = "SELECT * FROM m_dosen 
        WHERE id_dosen LIKE '%$keyword%' OR nama_dosen LIKE '%$keyword%' 
        ORDER BY id DESC";
} else {
    $query = "SELECT * FROM m_dosen 
        ORDER BY id DESC";
}

$a = mysqli_query($conn, $query);
$no = 0;
echo "<br>";
echo "<table border='1' width='80%' align='center'>";
echo "<form method='POST' action=''>";
echo "<tr><td colspan=2>Pencarian</td><td colspan=7><input type=text name=keyword value='$keyword'><input type='submit' name='search' value='CARI'> <input type='submit' value='NORMAL'></td></tr>";
echo "<tr><th> NO </th><th> ID DOSEN </th><th> NAMA DOSEN </th><th colspan=2>AKSI</th></tr>";
echo "</form>";
while ($b = mysqli_fetch_array($a)) {
    $no = $no + 1;
    echo "<tr><td> $no </td> <td> $b[id_dosen] </td> <td> $b[nama_dosen] </td>";
    echo "<td><a href='index.php?menu=m_dosen&id=$b[id]'><img src='ubah.png' style='width:25px;height:25px;'></a></td>";
    echo "<td><a href='index.php?menu=m_dosen&delete_id=$b[id]'><img src='pngwing.com.png' style='width:25px;height:25px;'></a></td></tr>";
}
echo "</table>";
?>
