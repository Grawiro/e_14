<?php
if(isSet($_POST['komentarz'])){
	$tekst = substr($_POST['komentarz'],0,255);
	$tekst = strip_tags($tekst)."\n";
	
	if(!$op = fopen('opinie.txt', 'a')){
		echo "Błąd!. Nie można otworzyć pliku opinie.txt";
	}
	else {
		if(fwrite($op, $tekst) === false) {
			echo "Dodanie komentarza nie powiodło się";
		}
	}
}
?>

<html>
<head>
<title>Opinie użytkowników</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<div>
<form action="http://localhost/Skrypt78.php" method="post">
<p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b><br/>(Maksymalnie 255 znaków)</p>

<textarea name="komentarz" rows="6" cols-"50" wrap="virtual"></textarea><br/>
<input type="submit" value="Wyślij">
</div>
</form>

<p><b>Dodane opinie:</b></p><br/>
<div>

<?php
$opinie = '';
if(file_exists('./opinie.txt')) {
	$opinie = file_get_contents('./opinie.txt');
	$opinie = nl2br($opinie);
}
if($opinie != '') {
	echo $opinie;
}
else {
	echo "Brak opinii na dany temat";
}
?>
</div>
</body>
</html>