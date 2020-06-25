<?php
$zm =7;
function pokaz() {
	echo "Wartość zmiennej \$zm wynosi ";
	echo $GLOBALS['zm'];
	echo ".<br/>";
}
pokaz();
?>