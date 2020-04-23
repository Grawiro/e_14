<?php
  setcookie("nazwa_cookies", date("d/m/Y G:i:s"), time()+3600,"/","localhost");
  #tworzy cookie nazwa, zawartosc, czas wygasniecia w [sekundach] tu 1h, sciezka zapisu,
  #domena dla ktorej cookie jest dostepne
  session_start(); #rozpoczyna sesje
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>php</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      /*stale
      __FILE__ -nazwa pliku php
      __LINE__ -linijka 
      __DIR__ -katalog z plikiem php
      */

      #napisy
      $napis_TX = <<<TX
      to jest napis "TX", 
      a to jego kolejna linijka.
      TX;
      $napis_PC = <<<'PC'
      to jest napis 'PC',
      a to jego kolejna linijka.
      PC;
      echo $napis_TX."<br>".$napis_PC."<br>";
      echo "**************************<br>";

      #formatowanie ciagow do kolejnych lini
      echo nl2br($napis_PC)."<br>";
      echo nl2br($napis_TX)."<br>";
      echo "**************************<br>";
      #przytnij tekst co 10 lub mniej znakow(cale wyrazy) i umiejsc do w nowej lini
      echo wordwrap($napis_TX, 10, "<br>");
      echo "<br>**************************<br>";

      strtoupper($napis_PC); #zamiana na doze i male
      strtolower($napis_TX);
      ucfirst($napis_TX); #pierwsza litera na duza
      ucwords($napis_TX); #pierwsza litera kazdego wyrazu na duza

      #usuwa znaki
      /*trim();
      ltrim();rtrim();*/

      #ile ma znakow
      strlen($napis_PC);

      #podciagi
      strstr($napis_TX, "TX");
      #jak jest to skopiuj do TX do konca a jak nie ma to zwroc false
      strpos($napis_PC, "pc"); #prawie to samo co wyzej
      substr($napis_PC, 4, 10); #wytnij od 4 znaku, 10 znaku 
      strtok($napis_PC,","); #powinno sie wykonywac w petli, zwraca
      #fragment do znaku ',' i w kolejnym wywolaniu zwraca kolejny fragment

      #przeszukiwanie podciagow
      strcmp($napis_PC,$napis_TX); #czy sa takie same, albo czy
      #$napis_TX jest w $napis_PC jesli tak to ile razy
      strcasecmp($napis_PC,"a"); #to samo co wyzej ale ta nie patrzy na wielkosc znakow

      #rzytowanie i zmiana typu
      $rzutowanie = (integer) 10.2;
      intval($rzutowanie); #tez na inta
      settype($rzutowanie, 'integer');
      /*typy
      integer
      float
      string
      boolean
      */

      #foreach
      $tablica_zwy = array(1,2,3);
      $tablica_asoc = array("a"=>"x","b"=>"y","c"=>"z");

      foreach ($tablica_asoc as $key => $value) {
        echo $key."=>".$value."<br>";
      }
      foreach ($tablica_zwy as $value){
        echo $value."<br>";
      }

      #naprzemienne bloki php i html
      $pokaz_html = false;
      if($pokaz_html){
    ?>
    <h1>Pokaz_html jest true</h1>
    <?php
      }
      #kontynuacja php

      #zmienne globalne i statyczne
      $zmienna_globalna = 3;
      function zmien_globalna(){
        #zmienna staje sie widoczna w funkcji
        global $zmienna_globalna;
        $zmienna_globalna=4;
        #lub tak
        $GLOBALS['zmienna_globalna']=5;

        static $statyczna = 1;
        echo "wywolano $statyczna raz(y).<br>";
        ++$statyczna;
      }
      zmien_globalna();
      zmien_globalna();
      echo $zmienna_globalna."<br>";

      #przekazywanie przez referencje
      $referencja = 1;
      function przesylanie_referencji(&$liczna){
        $liczna+=1;
      }
      przesylanie_referencji($referencja);
      echo $referencja."<br>";

      #obsluga czasu
      time(); #zwraca czas w milisekundach od 01.01.1970
      $date = getdate();
      $dzien = $date["minutes"];
      /*argumenty dla getdate();
      secound
      minutes
      hours
      mday -dzien miesiaca
      wday -dni tygodnia od 0(niedziela) do 6(sobota)
      mon -nr miesiaca
      year
      yday -nr dnia w roku od 0 do 365
      weekday -nazwa dnia tygodnia
      month -nazwa miesiaca
      0 -aktualny czas
      */
      echo date("d-m.Y G:i:s")."<br>";
      /*kolejy czas
        a/A -male am/pm i duze AM/PM
        c -cala data
        d -dzien miesiaca
        D -dzien tygodnia skrocone (mon, tue)
        F -nazwa miesiaca
        g -godzina w formacie 12h
        G -24h
        H -24h ale od 1 do 9 maja 0 na poczatku np 02
        i -minuty
        l -nazwa dnia tygonia
        m -miesiac
        s -sekundy
        Y -rok
      */
      $falczywa_data = mktime(16,30,0,12,24,2020);
      echo date("d/m/Y G:i:s", $falczywa_data)."<br>";
      /*ustawianie czasu i podanie do jako nowa data
      godzina
      minuty
      sekundy
      miesiac
      dzien
      rok
      */

      /*operacje na plikach
      file_exists("pliczek.txt"); #czy istnieje
      is_file("pliczek.txt"); #czy jest plikiem
      is_dir("katalog"); #czy jest katalogiem
      filesize("pliczek.txt"); #rozmiar pliku
      touch("pliczek.txt"); #tworzy plik
      unlink("pliczek.txt");  #usuwa plik
      readfile($pliczek); #zwraca liczbe bajtow jaka jest w pliku
      file_get_contents($pliczek); #zwraca odczytana zawartosc pliku
      file($pliczek, FILE_SKIP_EMPTY_LINES); #zwraca tablice z kolejnymi wierszami
      #omija puste linijki
      mkdir("katalog"); #tworzy katalog
      rmdir("katalog"); #usuwa katalog
      $katalog = opendir("katalog"); #otwiera
      readdir($katalog); #zwraca nazwy kolejnych elementow z katalogu
      closedir($katalog); #zamyka katalog
      scandir("katalog"); #to samo co readdir
      */

      #zakonczenie dzialania skryptu
      #exit(); #robia to samo w ("Mozna podac jakis tekst albo liczbe od 0 do 254")
      #die();

      #cookies max 4kB/ musi buc wywolane przed znacznikiem <html>
      $mies = 2592000+time(); #to jest 30 dni
      if(isset($_COOKIE["nazwa_cookies"])){
        $ostatnia_wizyta = $_COOKIE["nazwa_cookies"];
        echo "Jestes tu poraz kolejny, [$ostatnia_wizyta]<br>";
      }else{
        echo "Jestes tu poraz pierwszy, albo dawno cie tu nie bylo.<br>";
      }
      #setcookie("nazwa_cookies", "To mi przechowaj", time()-100,"/","localhost");
      #usuwa cookie
      
      #sesje
      echo session_id()."<br>"; #pokazuje id sesji
      if(!isset($_SESSION['ile'])){ #sprawdza czy taka zmienna istnieje jak nie to ja tworzy
        $_SESSION['ile'] = 0;
      }
      unset($_SESSION['ile']); #usuwa zmienna z sesji
      session_destroy();  #zamyka sesje
    ?>
  </body>
</html>
<!--koniec na 311 stronie-->