<?php
$dane = "Kamil Frąckowiak, ul. TwojaOstatnia 23, 62-025 Siekierki Największe, tel. 123654798";
$znak = ",";
$ciąg = strtok($dane, $znak);
while (is_string($ciąg)){ //sprawdza, czy typ podanej jako argument zmiennej jest ciągiem
	if ($ciąg) {
		echo "$ciąg<br/>";
	}
	$ciąg = strtok($znak);
}
?>