<?php
class osoba
{
	public $id, $nazwisko, $imię;
	function wpiszNazwisko($arg1) //metoda wpiszNazwisko posiada jeden argument arg1, który zostanie przypisany właściwości $nazwisko
	{
		$this -> nazwisko = $arg1;
	}
	function pobierzNazwisko()
	{
		return $this -> nazwisko;
	}
	function wpiszImię($arg2)
	{
		$this -> imię = $arg2;
	}
	function pobierzImię()
	{
		return $this -> imię;
	}
}
$postać1 = new osoba();
$postać2 = new osoba();

$postać1 -> nazwisko = "Frąckowiak";
$postać1 -> imię = "Kamil";

$postać2 -> wpiszNazwisko('Placek');
$postać2 -> wpiszImię('Jacek');

echo $postać1 -> nazwisko." ".$postać1 -> imię;
echo "</br>";
echo $postać2 -> pobierzNazwisko()." ". $postać2 -> pobierzImię();

?>