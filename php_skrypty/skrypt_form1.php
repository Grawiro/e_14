<?php
echo "Odpowiedź z PHP: <b><br/>".$_POST['nazw']."</b";
echo "<b>".$_POST['im']."</b><br>";
echo "<b>".$_POST['zaw']."</b><br>";
echo "<b>".$_POST['adr']."</b><br>";

if(!isSet($_POST['wykszt'])){
	echo "<br/>Proszę zaznaczyć pole <b>Wykształcenie</b>";
}
else {
	echo "<br/>Zostało wybrane wykształcenie: {$_POST['wykszt']}.";
}
?>