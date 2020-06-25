<?php
class osoba
{
	public $nazwisko, $imię;
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
class klient extends osoba
{
	public $adres;
	public function wpiszAdres($arg3)
	{
		$this -> adres = $arg3;
	}
	public function pobierzAdres()
	{
		return $this -> adres;
	}
	public function pobierzImię() //ta metoda przysłoniła metodę klasy osoba
	{
		return "Imię nieznane";
	}
}
$osoba1 = new osoba();
$osoba1 -> wpiszNazwisko('Jeleń');
$osoba1 -> wpiszImię('Ewa');
echo "Dane obiektu klasy osoba <br/>";
echo $osoba1 -> pobierzNazwisko()." ".$osoba1 -> pobierzImię();
echo"<br/>";
$klient1 = new klient();
$klient1 -> wpiszNazwisko('Schab');
$klient1 -> wpiszImię('Janusz');
$klient1 -> wpiszAdres('Kozia dziura');

echo "Dane obiektu klasy klient <br/>";
echo $klient1 -> pobierzNazwisko()." ".$klient1 -> pobierzImię()." ".$klient1 -> pobierzAdres();
echo "<br/>";
?>