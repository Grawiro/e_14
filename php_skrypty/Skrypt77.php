<?php
$katalog = "./";
$tablica = scandir($katalog);
foreach($tablica as $plik) {
	echo "$plik<br/>";
}
?>