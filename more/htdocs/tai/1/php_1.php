<?php
  print "Teskt w print<br>";
  echo "Tekst w echo<br>";
  echo "<ul>
          <li>pierwszy</li>
          <li>drugi</li>
        </ul>";
  $zmienna = 32;
  define("stala", "To jest stala");
  echo ($zmienna+3)." ".stala."<br>";
  //. odpowiada + w javiescript

  //operacja bitowe ~/not
  //operatory logiczne ===-identyczne/!==true jak nie sa identyczne (warosc/typ)

  //if
  if(1<2){
    echo "tak";
  }
  elseif(1>2){
    echo "nie";
  }
  else{
    echo "nw juz";
  }
  echo "<br>";

  //switch
  switch($zmienna){
    case 30:
      echo "30";
      break;
    case 31:
      echo "31";
      break;
    case 32:
        echo "32";
        break;
    default:
        echo "Nw co to za liczba";
  }
  echo "<br>";

  //losowa liczba
  echo rand(1,49)."<br>";

  #phpinfo(); #info o wszytkich ustawieniach php i nie tylko

  //zewnetrzne pliki
  #include(php_2.php); #jedynie ostrzezenie jak nie ma takiego pliku
  #require(php_3.php); #blad jak nie ma takiego pliku

  //Tablice
  $tablica_1 = array(1,2,3,4,5,6);
  $tablica_1[2]=3;

  $tablica_2[]=1;
  $tablica_2[]=2;
  $tablica_2[]=3;
  $tablica_2[]=4;
  $tablica_2[]=5;
  $tablica_2[]=6;
  //to samo co wyzej

  sort($tablica_1); #rosnaco
  rsort($tablica_2); #malejaco
  count($tablica_2); #liczba elemntow w tablicy
  sizeof($tablica_2);
  array_search(2,$tablica_1); #czy 2 jest w tablicy

  //Tablica asocjacyjna
  $tablica_3 = array("klucz_1"=>1,"klucz_2"=>2);

  $tablica_4["klucz_1"]=1;
  $tablica_4["klucz_2"]=2;

  print_r($tablica_3); #wyswietlanie tablicy asocjacyjnej
  asort($tablica_4);  #sortuje wedlug wartosci arsort();
  ksort($tablica_3);  #sortuje wedlug kluczy krsort();

  function poka($a){
    return "<br>".$a."+21=".($a+21)."<br>";
  }

  echo poka(21);

  #klasy
  class Klasa_1{
    function __construct($a="a", $b="b"){
      $this->imie=$a;
      $this->nazwisko=$b;
    }

    private $imie;
    private $nazwisko;
    
    public function getImie(){return $this->imie;}
    public function getNazwisko(){return $this->nazwisko;}
    
    public function setImie($a){$this->imie=$a;}
    public function setNazwisko($a){$this->nazwisko=$a;}
    
    protected $wiek;
  }
  class Klasa_2 extends Klasa_1{
    #dziedziczenie
    private $imie_2;
    #przyslanianie funkcji 
    public function getImie(){
      parent::getImie(); #wykonaj metode z klasy rodzica
      return $this->imie_2;
    }
  }

  $klaska = new Klasa_1;
  $klaska->setImie("Kamil");
  $klaska->setNazwisko("Mistic");
  echo $klaska->getImie()." ".$klaska->getNazwisko()."<br>";

  $klaserka = new Klasa_2;
  echo $klaserka->getImie()."<br>";

  #wyjatki
  try{
    throw new Exception("komunikat",123);
  }catch(Exception $domek){
    echo "zlapano wyjatek ".$domek->getCode()."<br>";
    /*metody dla Exception
    getCode()
    getFile()
    getLine()
    getMessage()
    */
  }

  #pliki
  $pliczek = fopen("pliczek.txt", "w");
  /*
  a  -dopisywanie do pliku
  a+ -odczyt i dopisywanie
  r  -tylko odczyt 
  r+ -odczyt i zapis od poczatku pliku
  w  -tylko zapis (zawsze tworzy nowy plik)
  w+ -odczyt i zapis (zawsze tworzy nowy plik)
  */
  fwrite($pliczek, "dopisz to ");
  fputs($pliczek, "dopisz to ");
  echo "wlasciciel pliku pliczek to: ".fileowner("pliczek.txt")."<br>";
  echo "prawa dostepu to ".fileperms("pliczek.txt")."<br>";
  fclose($pliczek);

  $pliczek = fopen("pliczek.txt", "r");
  while(!feof($pliczek)){
    $linia = fgets($pliczek, 1024);
    #fread($pliczek, 32); #to samo co wyzej
    echo $linia;
  }
  fclose($pliczek);
  echo "<br>";

  #formularze
  /*echo $_POST['login']."<br>";
  echo $_POST['pass']."<br>";
  for($i=0;$i<3;$i++){
    if(!empty($_POST["wynik"][$i])){
      #sprawdza czy nie jest pusty
      #if(isSet($_POST["kolec"])){
      #sprawdza czy cos zostalo zaznaczone w radio
      echo $_POST["wynik"][$i]." ";
    }
  }
  echo "<br>".$_POST["kolec"]."<br>";
  echo "<br>";
  #odbieranie plikow
  $katalog = "./";
  $max_size = $_POST['max_file_size'];
  if(is_uploaded_file($_FILES['plik']['tmp_name'])){
    if(!($_FILES['plik']['size']>$max_size)){
      if(isset($_FILES["plik"]['type'])){
        if(move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$_FILES['plik']['name'])){
          echo "udalo sie przeniesc plik<br>";
        }
      }
    }
  }
  */

  #baza danych
  $baza_polaczona = mysqli_connect("localhost", "root", "", "szkola");
  $zapytanie = "select * from uczen";
  $wynik_zapytania = mysqli_query($baza_polaczona, $zapytanie);
  #$wynik_zapytania = mysqli_fetch_array($zapytanie); #zwraca tablice asocjacyjna
  #$wynik_zapytania['id']; #wyswietli sie wtedy nr id z wyniku
  while($wiersz_zapytania = mysqli_fetch_row($wynik_zapytania)){
    #mysqli_num_rows($wynik_zapytania);  #ile jest wierszy zwroconych w zapytniu
    #mysqli_affected_rows(); #ile wieszy zostalo zmodyfikowanych
    for($i=0;$i<count($wiersz_zapytania);++$i){
      echo $wiersz_zapytania[$i]." | ";
    }
    echo "<br>";
  }
  
  mysqli_close($baza_polaczona);

?>