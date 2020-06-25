<?php
class osoba //jeśli chcemy, aby obiekty klasy osoba przyjmowały automatycznie określone wartości początkowe, to do definicji klasy należy dodać definicję konstruktora, np. w postaci takiego skryptu
{
	public $nazwisko, $imię;
	function __construct//podwójny podkreślnik!!!i spacja po function!!!
	{
		$this -> nazwisko = "Anonim";
		$this -> imię = "Gall";
	}
	public function wpiszNazwisko($arg1)
	{
		$this -> nazwisko = $arg1;
	}
	public function pobierzNazwisko()
	{
		return $this -> nazwisko;
	}
	public function wpiszImię($arg2)
	{
		$this -> imię = $arg2;
	}
	public function pobierzImię()
	{
		return $this -> imię;
	}
}
$postać1 = new osoba();
$postać2 = new osoba();

$postać2 -> wpiszNazwisko('Frąckowiak');
$postać2 -> wpiszImię('Kamil');
echo $postać1 -> pobierzNazwisko(), $postać1 -> pobierzImię();
echo "<br/>";
echo $postać2 -> pobierzNazwisko(), $postać2 -> pobierzImię();
?>
	