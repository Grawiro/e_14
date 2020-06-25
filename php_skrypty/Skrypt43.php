<?php
function progr($jezyk = "PHP")//przypisanie wartości domyślnej argumentacji funkcji
{
	return "Język programowania - $jezyk";
}
echo progr();
echo "<br/>";
echo progr(null);
echo "<br/>";
echo progr("Java");
?>