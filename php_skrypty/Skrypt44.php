<?php
function styl($tekst, $kolor = "red")
{
	echo "<p style = \"color: $kolor\">" . $tekst . "</p>";
}
styl("Tytuł <br />", "blue");
styl("Rozdział 1. <br/>", "green");
styl("Treść <br/>");
?>