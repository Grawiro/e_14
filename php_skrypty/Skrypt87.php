<?php
class osoba
{
	public $nazwisko, $imię;
	public function wpiszNazwisko($arg)
	{
		$this -> nazwisko = $arg;
	}
	public function pobierzNazwisko()
	{
		return $this -> nazwisko;
	}
	public function wpiszImię($arg)
	{
		$this -> imię = $arg;
	}
	public function pobierzImię()
	{
		return $this -> imię;
	}
}
class klient extends osoba
{
	public $imię2;
	public function wpiszImię($arg)
	{
		parent::wpiszImię($arg);
		$this -> imię2 = $arg;
	}
	public function pobierzImię()
	{
		parent::pobierzImię();
		return $this -> imię2;
	}
}
$klient1 = new klient();
$klient1 -> wpiszNazwisko('Giewont');
$klient1 -> wpiszImię('Kasprowy');

echo "Dane obiektu klient1 <br/>";
echo $klient1 -> pobierzNazwisko()." ".$klient1 -> pobierzImię();
echo "<br/>";
?>