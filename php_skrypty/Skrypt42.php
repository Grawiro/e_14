<?php
function wart(&$liczba)
{
	$liczba += 3;
}
$liczba =2;
echo "wartość zmiennej \$liczba przed wywołaniem funkcji: $liczba <br/>";
wart($liczba);
echo "wartość zmiennej \$liczba po wywołaniu funkcji: $liczba <br/>";
?>