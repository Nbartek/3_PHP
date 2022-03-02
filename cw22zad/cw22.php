<?php
require_once "configuration.php";
require_once "uczen.php";
 if(!empty($_POST['name'])&&!empty($_POST['nazw'])){
   $uczen = new Student(trim($_POST['name']),trim($_POST['nazw']),strval($_POST['grups']));
  var_dump($uczen);
   //$imie = trim($_POST['name']);
   //$nazwisko = trim($_POST['nazw']);
   //$grupa = strval($_POST['grups']);
   //echo "Nazywasz się {$nazwisko} {$imie}<br>";
   echo "Twoje imię to ".$uczen->getName()." a nazwisko ".$uczen->getSurName();
   if($_POST['grups']!=""){
       echo "Należysz do: ".$uczen->getGroup()."<br>";
       $zapis = fopen(DIR."/".$uczen->getGroup().".txt",'a') or die("Plik nie został otwarty");
        $txt = "Imię: ".$uczen->getName()." Nazwisko: ".$uczen->getSurName().PHP_EOL;
        fwrite($zapis,$txt);
        fclose($zapis);
   }else{}
  echo "<br>";
 }else{echo "<h1>Nie wypełniłeś danych potrzebnych</h1>";}
 echo "<br>";
echo "<a href='cw22.html'>Powrót do formularza</a>";