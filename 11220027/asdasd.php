<!DOCTYPE html>
<html>
<head>
    <title>faiz 11220027 latihan6</title>
</head>
<body>
    <form method="POST" action="">
        Masukkan angka: <input type="number" name="angka" min='1' max="999" required> <br>
        <input type="submit" name="tombol" value="OK">
    </form>

    <br>

    <?php
    if(isset($_POST["tombol"])){
        $input_number = $_POST["angka"];
        echo "<table border='1'>";
        for($a = 1; $a <= $input_number; $a++){
            if ($a % 10 == 1) {
                echo "<tr>"; // Start a new row for every 10 elements
            }
            echo "<td>$a</td>"; // Display the number in a table cell
            if ($a % 10 == 0) {
                echo "</tr>"; // End the row after 10 elements
            }
        }
        echo "</table>";
    }
    ?>
</body>
</html>