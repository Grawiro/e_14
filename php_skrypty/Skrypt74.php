<?php
if(!$p = fopen('dane.txt', 'r')) {
	echo "Nie można otworzyć pliku.";
}
else {
	while(($z=fgetc($p))!==false){//znak ! jest operatorem końca tekstu w pliku
		echo $z;
	}
	fclose($p);
}
?>