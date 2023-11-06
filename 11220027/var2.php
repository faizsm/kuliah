<?php
$a = 1;
$b = 2;
echo " $a + $b =";
function Jumlah()
{
global $a, $b;
$b = $a + $b;
}
Jumlah();
echo $b;
?>