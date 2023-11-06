<html>
<head>
    <title>faiz 11220027 latihan6</title>
</head>
<body>
    <form method="POST" action="">
    masukan angka : <input type="number" name="angka" min='1' max="999" required> <br>
    <input type="submit" name="tombol" value="OK">
    </form>
<?php
if(isset($_POST["tombol"])){
    $nomer = $_POST['angka'];
  echo"<table border = '1' align = 'center'>";
  for($a= 1; $a <=$nomer; $a++)
  echo "<tr>";
  echo"<th>no</th> ";
  echo"<th> nama</th> ";
  echo"<th> alamat</th> ";
  echo"</tr>";
  {
    
    echo "<tr>";
    echo"<td>$a</td> ";
    echo"<td> nama ke $a</td> ";
    echo"<td> alamat ke $a</td> ";
    echo"</tr>";
    

  }  
    echo"</table>";
}
?>
</body>
</html>