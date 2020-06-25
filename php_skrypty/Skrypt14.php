<?php
$dane = array(
		array("nazwisko" => "Frąckowiak",
			  "imię" => "Kamil",
			  "wiek" => 18),
		array("nazwisko" => "Szulczewski",
			  "imię" => "Paweł",
			  "wiek" => 28),
		array("nazwisko" => "Musiał",
			  "imię" => "Norbert",
			  "wiek" => 00)
			  );
echo $dane[2]["imię"]; //należy użyć indeksu elementu głównego z nazwą klucza			 
?>
			  