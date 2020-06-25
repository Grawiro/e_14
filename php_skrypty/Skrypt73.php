<?php
if(!$p = fopen('dane.txt', 'r')) {
	echo "Nie można otworzyć pliku.";
}
else {
	while(!feof($p)) {
		$w = fgets($p,100);
		echo "$w<br/>";
	}
	fclose($p);
}
?>