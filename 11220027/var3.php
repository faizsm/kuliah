<?php
$a = 2;
$b = 4;
echo " $a + $b =";
function Jumlahkan()
{
  $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
Jumlahkan (); 
echo $b;
?>