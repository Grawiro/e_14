<!DOCTYPE html>
<html lang='pl'>
<head>
  <title>html</title>
  <meta charset='UTF-8'>
  <meta name='description' content='egzamin zawodowy'>
  <meta name='keywords' content='e_14, egzamin'>
  <meta name='author' content='Kamil Purcel'>
</head>
<body>
  <div>
    wyświetlanie znaków specjalnych &amp;&#38; &lt; &gt;<br>
    ->dodatkowa spacja &nbsp;.<br>
    <p>
      tekst akapitu
        <h1>tekst nagłówka</h1><br>
        <b>pogrubiny tekst</b><br>
        <i>pochylony tekst</i><br>
        <u>podkreślony tekst</u><br>
        <strike>skreślony tekst</strike><br>
        indeks <sup>górny</sup><br>
        indeks <sub>dolny</sub><br>

      linia pozioma 2 wersje:
        <hr>
        <hr width='100%' size='10px' color='blue'>

      lista nienumerowana:
        <ul> <!--type='disc/circle/square'-->
          <li>punkt 1</li>
          <li>punkt 2</li>
        </ul>
      lista numerowana:
        <ol> <!--type='1/i/I/a/A' start='x'-->
          <li>punkt 1</li> <!--value='x'-->
          <li>punkt 2</li>
        </ol>

      wstawianie grafiki:<br>
        <img src='grafika_1.png' alt='nie załadowano' width='100px' height='100px'><br>

      odtwarzacz audio:<br>
        <audio src='muzyka.mp3' controls>player nie działa</audio><br>
        <!--autoplay/loop-->
      odtwarzacz wideo:<br>
        <video src='film.mp4' height='200px' width='250px' poster='grafika_1.png'
        controls>player nie działa</video><br>
    
      tablica:<br>
        <table border='1px' align='left'>
          <!--cellpadding='x' cellspacing='x' bordercolor='y'-->
          <caption>tytuł tabeli</caption>
          <tr>
            <th>komórka nagłówkowa</th>
            <td>1.2</td>
          </tr>
          <tr>
            <td>1.2</td>
            <td rowspan="2">łączenie wieszy</td>
          </tr>
          <tr>
            <td>1.2</td>
          </tr>
          <tr>
            <td colspan="2">łączenie kolumn</td>
          </tr>
        </table>
          aby wyświetlić tekst obok tablicy<br>
          trzeba dodać align w table<br>
          oraz clear w ostatnim br<br>
        <br clear="left">

      linki i etykiety:<br>
        <a name='tutaj'></a>
        <a href='#tutaj'>przeniś do etykiety</a><br>
        <a href='http://google.com' target='_blank'>otwórz google w nowej karcie</a><br>
        <a href='mailto: grawiro@gmail.com'>napisz e-mail'a</a><br>

      formularz:<br>
        <form action='mailto: grawiro@gmail.com' method='POST' autocomplete='off'>
          <input type='hidden' name='niewidac' value='jakaś wartość'>
          <input type='text' name='nieaktywny' disabled='disabled'
            value='pole nieaktywne'><br>
          <input type='text' name='odczyt' readonly='readonly' size='10'
            value='pole tylko do odczytu'><br>
          text:
            <input type='text' name='normalny' value='wartość domyślna' maxlength='10'><br>
          hasło:
            <input type='password' name='haslo'><br>
          e-mail:
            <input type='email' name='email'><br>
          number:
            <input type='number' name='number' min='1000' max='1050' value='1010'><br>
          date:
            <input type='date' name='date' min='2018-01-01' max='2018-12-31'><br>
          url:
            <input type='url' name='url'><br>
          kod pocztowy:
            <input type='text' pattern='[0-9]{2}-[0-9]{3}'><br>
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
            <select name='wybor' size='5' multiple>
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
            <textarea name='dlugitekst' cols='15' rows='4' wrap='off'
              >max x znaków</textarea><br> <!--off/virtual/physical-->
          plik:
            <input type='file' name='plik'><br>
          przyciski:
            <input type='button' name='przycisk' value='przycisk'>
            <input type='reset' value='wyczyść'>
            <input type='submit' value='prześlij'><br>
        </form>
    </p>
  </div>
<body>
</html>