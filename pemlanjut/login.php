<?php
session_start();
include "koneksidb.php";
if (isset($_POST['fLogin'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    //echo"$u $p";
    $sql= "SELECT*FROM m_pengguna WHERE kode_op ='$username' AND pass=SHA1('$password')";
    $query= mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data = mysqli_fetch_array($query);
        $_SESSION['level'] = $data['level'];
        $_SESSION['nama'] = $data['nama_op'];
        header("location:index.php");
    } else {

        echo "User dan atau Password Salah";
        echo "<META http-equiv=refresh content=\"0; URL=form_login.php\">";
    }
}

?>