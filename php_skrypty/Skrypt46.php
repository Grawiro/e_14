<?php
$tab = array(3,5,6,8,9,0,1);
echo "Zawartość tablicy przed sortowaniem: "; echo "<br/>";
foreach($tab as $x){
	echo "$x"; echo "<br/>";
}
sort($tab);
echo "Zawartość tablicy po sortowaniu: "; echo "<br/>";
foreach($tab as $x){
	echo "$x "; echo "<br/>";
}
?>