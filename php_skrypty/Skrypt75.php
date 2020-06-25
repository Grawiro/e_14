<?php
if(!$p = fopen('dane.txt', 'r')) {
	echo "Nie można otworzyć pliku.";
}
else {
	while(!feof($p)) {//znak ! jest operatorem końca tekstu w pliku
		$b = fread($p, 32);
		echo "$b<br/>";
	}
	fclose($p);
}
?>