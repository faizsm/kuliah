<?php
$a = 1; /* variabel global */
function Test()
{
global $a;
echo $a; /* variabel lokal */
}
Test();
?>