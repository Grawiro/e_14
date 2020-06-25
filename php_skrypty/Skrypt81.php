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
?>