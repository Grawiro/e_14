<?php
try {
	throw new Exception("Testowanie wyjątku",27);
}
catch (Exception $e) {
	echo "Problem w kodzie: ".$e->getCode()."<br/>";
	echo "Treść komunikatu: ".$e->getMessage()."<br/>";
	echo "W pliku: ".$e->getFile()."<br/>";
	echo "W wierszu: ".$e->getLine()."<br/>";
}
?>