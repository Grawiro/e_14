<!DOCTYPE html>
<html lang='pl'>
<head>
  <title>javascript</title>
  <meta charset='UTF-8'>
  <script type='text/javascript' src='javascript.js'></script>
</head>
<body>
  <p id='wybierz_mnie'>to jest akapit</p>
  <form><input type='text' id='zmiana_wartosci' value='skla'></form>
  
  <script type='text/javascript'>
    document.write('tekst w document.write()'+'<br>');

    /*alert('pokaż wiadomość');
    prompt('zapytaj o coś','odpowiedź');
    confirm('potwierdź coś');*/
    var zmienna=/*parseInt(prompt('podaj liczbe', 10))*/ 10;
    
    if(zmienna==10){
      document.write('nie wysiliłeś się za bardzo<br>');
    }
    else if(zmienna!=10 && zmienna>10 || zmienna==9){
      document.write('zmienna jest równa 9 lub jest wieksza od 11<br>');
    }
    else{
      document.write('zmienna '+zmienna+' nie pomyślałem o takiej liczbie<br>');
    }
    document.write(((zmienna==10)?'wartość domyślna':'inna wartość')+'<br>');

    var j=1;
    for(var i=1; i<=5; ++i){
      if(i==2){
        continue;
      }
      else if(i==4){
        break;
      }
      while(j<5){
        document.write(j+'>');
        ++j;
      }
      do{
        document.write(j+'<');
        --j;
      }while(j>=1)
      ++j;
      document.write('>'+i+'<br>');
    }
  
    document.write("3+4="+dodaj(3,4)+"<br>");
    bez_arg('tekst', 123, 9, 'kolejny tekst');

    obiekt=new tworze_obiekt("kamil", "mistic");
    obiekt.poka();

    var tablica = new Array(2, 1, 3, 123, 12, 2);
    tablica.sort();
    tablica.reverse();
    document.write(tablica.join()+'<br>');  //wyświetla całą tablice

    //setTimeout('location.reload();', 2000);
    
    var wybierz_element = document.getElementById('wybierz_mnie').innerHTML = 'zmieniłem zawartość tego elementu';
    wybierz_element = document.getElementById('zmiana_wartosci');
    wybierz_element.value = 'zmiana wartości';

    var tekst = 'Napis';
    document.write(tekst.toLowerCase()+'<br>');
    document.write(tekst.toUpperCase()+'<br>');
    
    /*document
    .bgColor=kolor;*/

    /*string
    .fontColor(kolor)
    .fontSize(rozmiar)*/

    /*Math
    .abs(x)
    .ceil(x)
    .floor(x)
    .max(x,y)
    .min(x,y)
    .pow(x,y)
    .round(x)
    .sqrt(x)*/

    /*zdarzenia
    onChange
    onClick
    onDblClick
    onFocus
    onKeyDown
    onKeyPress
    onKeyUp
    onLoad
    onMouseDown
    onMouseOut
    onMouseOver
    onMouseUp
    onReset
    onSubmit
    onUnload
    onSelect*/

    function logowanie(formularzyk){
      if(formularzyk.login.value=='admin' && formularzyk.pass.value=='admin'){
        formularzyk.wynik.value='udało sie zalogować';
      }
      else{
        formularzyk.wynik.value='błedne dane';
        if(formularzyk.login.value!='admin'){
          formularzyk.login.focus();
        }
        else{
          formularzyk.pass.focus();  
        }
      }
    }
    function zresetuj_formularz(formularzyk){
      formularzyk.reset();
      /*document.getElementById('formularz').reset();*/
    }

    function sprawdz_pole(formularzyk){
      var form = formularzyk, /*document.getElementById(formularzyk)*/
      wzory = {
        'email' : /^[0-9a-zA-Z.]+@[0-9a-zA-Z\-]+\.[a-zA-Z]{2,3}$/,
        'pass' : /^admin$/,
        'login' : /^admin$/,
      };
      for (var pole in wzory){
        if(form[pole]){
          if(!wzory[pole].test(form[pole].value)){
            alert('pole '+pole+' jest źle uzupełnione');
            form[pole].style.background = 'yellow';
            return false;
          }else{
            form[pole].style.background = 'white';
          }
        }
      }
      return true;
    }
  </script>

  <form id='formularz' action='mailto:grawiro@gmail.com' method='POST' onsubmit="return logowanie(this);">
    login:<input type='text' id='login' name='login'><br>
    haslo:<input type='password' name='pass'><br>
    e-mail:<input type='text' name='email'><br>
    wynik:<input type='text' name='wynik' readonly><br>
    <input type='button' value='prześlij' onclick="logowanie(this.form)">
    <input type='submit'>  
    <input type='button' value='zresetuj' onclick="zresetuj_formularz(this.form)">
    <input type='button' value='sprawdz email' onclick="sprawdz_pole(this.form)">
  </form>

  <p onmouseout="zmiana_koloru('white')" onmouseover="zmiana_koloru('red')">zmiana koloru</p>
  <img src='grafika_1.png' id='podmiana' height='222px' width='222px'>
  
  <script>
    function zmiana_koloru(kolor){
      document.bgColor=kolor;
    }
    
    var podmianka_1 = new Image();
    podmianka_1.src = 'grafika_1.png';

    var podmianka_2 = new Image();
    podmianka_2.src = 'grafika_2.png';

    var podmianka=document.getElementById('podmiana');
    
    podmianka.onmouseover=function(){
      this.src=podmianka_2.src;
    }
    podmianka.onmouseout=function(){
      this.src=podmianka_1.src;
    }
  </script>
</body>
</html>