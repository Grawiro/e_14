<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br/>";
echo "Wprowadzone dane:<br/>";
echo "Nazwisko: <b>".trim($_POST['nazw'])."</b><br/>";
echo "Imię: <b>".trim($_POST['im'])."</b><br/>";
echo "Zawód: <b>".trim($_POST['zaw'])."</b><br/>";
echo "Adres e-mail: <b>".trim($_POST['adr'])."</b><br/>";

if(!isSet($_POST['wykszt']))
	echo "<br/>Proszę zaznaczyć pole <b>Wykształcenie</b>";
else
	echo "Wykształcenie: <b>".trim($_POST['wykszt'])."</b><br>";
echo "<p><b>Znajomość języków:</b></p>";
if(!empty($_POST['języki'])) {
	echo "<ul>";
	foreach ($_POST['języki'] as $wartosc) {
		echo "<li>$wartosc</li>";
	}
	echo "</ul>";
}
else {
	echo "<p><b>".$_POST['nazw']."</b> nie zna żadnego języka.</p>";
}
?>