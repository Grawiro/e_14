<?php
$katalog = "./"; //tu podałem nazwę katalogu bieżącego htdocs
if($deskr = opendir($katalog)) {
	while(($plik = readdir($deskr)) !==false)
		echo "$plik<br/>";
	closedir($deskr);
}
else {
	echo "Nie można otworzyć katalogu";
}
?>