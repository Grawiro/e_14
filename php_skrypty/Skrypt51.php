<?php
$tekst = <<<TX
Nie widziałam cię już od miesiąca.
I nic. Jestem może bledsza,
trochę śpiąca, trochę bardziej milcząca,
lecz można żyć bez powietrza!
TX;
echo "<b>Tekst przed użyciem funkcji nl2br():</b><br/>";
echo $tekst."<br/><br/>";
echo "<b>Tekst po użyciu funkcji nl2br():</b><br/>";
echo nl2br($tekst);
?>