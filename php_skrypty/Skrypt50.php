<?php
$czas = mktime(23, 33, 0, 28, 12, 2010);
echo date("d-m-Y G:i", $czas) . "<br/>";
echo date("Y-m-d G:i:s", $czas);
?>