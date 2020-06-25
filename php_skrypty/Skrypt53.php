<?php
$tekst = <<<TX
Nie widziałam cię już od miesiąca. I nic. Jestem może bledsza, trochę śpiąca, trochę bardziej milcząca, lecz można żyć bez powietrza!
TX;
echo wordwrap($tekst, 1, "<br/>\n");
?>