<?php
  setcookie('nazwa_cookies', date('d/m/Y G:i:s'), time()+3600, '/', 'localhost');
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
  <title>php</title>
  <meta charset='UTF-8'>
</head>
<body>
  <?php
    if(isset($_COOKIE['nazwa_cookies'])){
      $ostatnia_wizyta = $_COOKIE['nazwa_cookies'];
      echo 'Jesteś tu poraz kolejny, ['.$ostatnia_wizyta.']<br>';
    }else{
      echo 'Jesteś tu poraz pierwszy, albo dawno cię tu nie było.<br>';
    }
    #setcookie('nazwa', 'prze', time()-100, '/', 'localhost');
    
    $zmienna = 32;
    define('stala', 'To jest stała');

    #elseif/switch
    #rand(1,49) #losowa liczba
    #include(php_2.php);

    $tablica = array(1, 2, 3, 4, 5, 6);
    $tablica_asocjacyjna = array('klucz_1'=>1,'klucz_2'=>2);
    
    foreach ($tablica_asocjacyjna as $key => $value) {
      echo $key."=>".$value."<br>";
    }

    #sort($x);/rsort($x);/count($x);/sizeof($x);/array_search(2,$x);
    #print_r($x);/asort($x);/ksort($x);/krsort($x);
    
    class klasa{
      function __construct($a='a', $b='b'){
        $this->zmienna_1=$a;
        $this->zmienna_2=$b;
      }
      private $zmienna_1;
      private $zmienna_2;
      
      public function getzmienna_1(){return $this->zmienna_1;}  
      public function setzmienna_2($a){$this->zmienna_2=$a;}
    }

    $klaska = new klasa('qwerty','zaq1');
    $klaska->setzmienna_2('nazwa');
    echo $klaska->getzmienna_1().'<br>';
  
    try{
      throw new Exception('komunikat',123);
    }catch(Exception $wyjatek){
      echo 'zlapano wyjatek '.$wyjatek->getMessage().'->'.$wyjatek->getCode().'<br>';
    }
    
    $plik = fopen('pliczek.txt', 'w+');
    /*a  -dopisywanie do pliku/a+ -odczyt i dopisywanie
    r  -tylko odczyt/r+ -odczyt i zapis od poczatku pliku
    w  -tylko zapis (zawsze tworzy nowy plik)/w+ -odczyt i zapis (zawsze tworzy nowy plik)*/
    fwrite($plik, 'zapisuje to w pliku');
    fseek($plik, 0);
    while(!feof($plik)){
      $linia = fread($plik, 1024);
      echo $linia.'<br>';
    }
    chmod('pliczek.txt' , 0777);
    fclose($plik);
  ?>

  <table border='1px'>
  <?php
    $baza = mysqli_connect('localhost', 'root', '', 'szkola');
    $zap = 'select * from uczen';
    $w_zap = mysqli_query($baza, $zap);
    while($wi_zap = mysqli_fetch_row($w_zap)){
      echo '<tr>';
      for($i=0; $i<count($wi_zap); ++$i){
        echo '<td>'.$wi_zap[$i].'</td>';
      }
      echo '</tr>';
    }
    mysqli_close($baza);
  ?>
  </table>

  <?php
    $napis='to jest tekst<br>';
    echo strtoupper($napis);
    echo strtolower($napis);
    
    $rzutowanie = (integer) 10.2;

    $zwykla_zmienna = 3;
    function zmienna_globalna(&$arg){
      global $zwykla_zmienna;
      $zwykla_zmienna=4;
      $GLOBALS['zwykla_zmienna']=$arg;
      static $statyczna = 1;
      echo 'wywołano '.$statyczna.' raz(y).<br>';
      ++$statyczna;
    }

    zmienna_globalna($zmienna);
    zmienna_globalna($zmienna);
    echo $zwykla_zmienna.'<br>';
  ?>
  
  <!--action='http://localhost/tai/1/php_1.php'-->
  <form name='formularz' action='php_formularz.php' method='POST' autocomplete='off' ENCTYPE='multipart/form-data'>
    text:
      <input type='text' name='normalny' maxlength='10'><br>
    hasło:
      <input type='password' name='haslo'><br>
    e-mail:
      <input type='email' name='email'><br>
    checkbox:<br>
      <input type='checkbox' name='zwierzak[]' value='kot' checked>kot<br>
      <input type='checkbox' name='zwierzak[]' value='pies'>pies<br>
      <input type='checkbox' name='zwierzak[]' value='chomik'>chomik<br>
    etykieta (wystarczy kliknąć napis):<br>
      <label><input type='checkbox' name='etykieta' value='napis'>kliknij napis<br></label>
    radio i grupowanie:<br>
      <fieldset>
        <legend>zgoda jest wymagana</legend>
        <input type='radio' name='zgoda' value='tak' required>tak<br>
        <input type='radio' name='zgoda' value='nie' required>nie<br>
      </fieldset>
    select:<br>
      <select name='wybor[]' size='5' multiple>
        <optgroup label='podgrupa 1'>
          <option>opcja 1</option>
          <option selected>opcja 2</option>
        </optgroup>
        <optgroup label='podgrupa 2'>
          <option>opcja 3</option>
          <option>opcja 4</option>
          <option>opcja 5</option>
        </optgroup>
      </select><br>
    datalist: <input type="text" name="datalist" list="lista"><br>
      <datalist id='lista'>
        <option>opcja 1</option>
        <option>opcja 2</option>
        <option>opcja 3</option>
      </datalist>
    textarea:<br>
      <textarea name='dlugitekst' cols='15' rows='4' wrap='physical'
        >max x znaków</textarea><br> <!--off/virtual/physical-->
    plik:
      <input type='file' name='plik'><br>
    przyciski:
      <input type='button' name='przycisk' value='przycisk'>
      <input type='reset' value='wyczyść'>
      <input type='submit' value='prześlij'><br>
  </form>
</body>
</html>