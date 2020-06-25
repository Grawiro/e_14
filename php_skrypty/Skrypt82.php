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
	function wpiszId($arg3)
	{
		$this -> id = $arg3;
	}
	function pobierzId()
	{
		return $this -> id;
	}
}
$postać1 = new osoba(); //tworzymy obiekty klasy osoba przypisane zmiennym
$postać2 = new osoba();

$postać1 -> nazwisko = 'Frąckowiak'; //właściwościom obiektu bezpośrednio przypisujemy wartości
$postać1 -> imię = 'Kamil';
$postać1 -> id = 1;

$postać2 -> wpiszNazwisko('Nowak'); //tutaj właściwościom wartości zostały przypisane przez wywołanie odpowiednuch metod
$postać2 -> wpiszImię('Artur');
$postać2 -> wpiszId(2);

echo $postać1 -> nazwisko." ".$postać1 -> imię;
echo "<br/>";
echo $postać2 -> pobierzNazwisko()." ".$postać2 -> pobierzImię();
?>
