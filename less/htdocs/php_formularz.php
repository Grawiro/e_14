<?php
  if($_POST['zgoda']=='tak'){
    if(!empty($_POST['normalny']) && !empty($_POST['haslo'])){
      echo $_POST['normalny'].' '.$_POST['haslo'].'<br>';
    }

    if(!empty($_POST['email'])){
      echo $_POST['email'].'<br>';
    }

    echo 'posiadane zwierzeta: ';
    for($i=0;$i<3;$i++){
      if(!empty($_POST['zwierzak'][$i])){
        #if(isSet($_POST["kolec"])){
        echo $_POST['zwierzak'][$i].', ';
      }
    }echo '<br>';

    if(!empty($_POST['etykieta'])){
      echo 'kliknołeś napis<br>';
    }else{
      echo 'nie kliknołeś napisu<br>';
    }

    echo 'wybrane opcje: ';
    for($i=0;$i<3;$i++){
      if(!empty($_POST['wybor'][$i])){
        echo $_POST['wybor'][$i].', ';
      }
    }echo '<br>';

    echo 'z datalist wybrano: ';
    if(!empty($_POST['datalist'])){
      echo $_POST['datalist'].'<br>';
    }echo '<br>';

    if(!empty($_POST['dlugitekst'])){
      echo $_POST['dlugitekst'].'<br>';
    }
    
    $katalog = "./";
    $max_size = 4096000;
    if(is_uploaded_file($_FILES['plik']['tmp_name'])){
      if(!($_FILES['plik']['size']>$max_size)){
        if(isset($_FILES['plik']['type'])){
          if(move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$_FILES['plik']['name'])){
            chmod($_FILES['plik']['name'], 0777);
            echo 'udalo sie przeniesc plik '.$_FILES['plik']['name'].'<br>';
          }
        }
      }
    }
  }else{
    echo 'nie wyraziłeś zgody<br>';
  }
?>