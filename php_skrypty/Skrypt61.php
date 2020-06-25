<?php
$dane = "Kamil Frąckowiak, ul. TwojaOstatnia 23, 62-025 Siekierki Największe, tel. 123654798";
echo "Ciąg główny:".$dane."<br/>";
$tel = strstr($dane, "tel.");
if($tel == false)
	echo "Brak numeru telefonu";
else
	echo "Znaleziony podciąg: ".$tel;
?>