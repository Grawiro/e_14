<?php
$tekst = "Uczymy się PHP - kochamy ten język. \n";
if(!$p = fopen('dane.txt', 'a')) {
	echo "nie można otworzyć pliku dane.txt";
}
else {
	if(fwrite($p, $tekst) === false) {
	echo "Zapis do pliku nie powiódł się";
}
else {
	echo $tekst;
}
fclose($p);
}
?>