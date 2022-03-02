<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
.line{margin:20px 30px;}
label{
    display:inline-block;
    width: 160px;
    text-align:right;
}
.result{
    margin-right: 100px;
    padding: 20px;
    border: solid 3px darkgreen;
    border-radius: 25px;
    float:right;
}#form1{
    float:left;
    border: solid 4px black; 
    background-color:lightgreen;
}
input{
    padding:5px;
    border:solid 1px white;
    border-radius: 5px;
}input[type=submit]{
background-color:black;
color:white;
}div#zapisz{
    padding-left:150px;
}
        </style>
    </head>
    <body>
        <h1>Bartek Nosek 2TIP/g nr23</h1>
        <div>
          <form method="post" id="form1">
          <div class="line">
          <label for="imie">Podaj imie: </label>
          <input type="text" name="imie">
          </div>
          <div class="line">
          <label for="nazwisko">Podaj nazwisko: </label>
          <input type="text" name="nazwisko">
          </div>
          <div class="line">
          <label for="data">Data urodzenia</label>
          <input type="date" name="data" id="data">
          </div>
          <div class="line">
          <label for="klasa">Podaj klasę: </label>
          <select name="klasa" id="klasa">
          <option value="nic"></option>
          <option value="1A">1A</option>
          <option value="1B">1B</option>
          <option value="1C">1C</option>
          <option value="1D">1D</option>
          </select>
          </div>
          <div id="plec" class="line">
            <p>Wybierz swoja płeć: </p>
            <input type="radio" id="male" name="gender" value="male" checked>
            <label for="male">Mężczyzna</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Kobieta</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Inne</label> 
            </div>
          
          <div class="line">
          <label for="zaint">Twoje zainteresowania: </label><br>
          <input type="checkbox" name="zaint[]" value="Sport">Sport<br>
          <input type="checkbox" name="zaint[]" value="Ksiazki">Ksiązki<br>
          <input type="checkbox" name="zaint[]" value="Film">Film<br>
          <input type="checkbox" name="zaint[]" value="Muzyka">Muzyka<br>
          <input type="checkbox" name="zaint[]" value="Gry">Gry<br>
          </div>
          Zgoda na przetwarzanie danych osobowych:
          <input type="checkbox" name="zgoda" id="zgoda" value="Zgoda"><br>
          <div id="zapisz"><input type="submit" value="Zapisz" id="zapisz"> </div>
          </form>  
          <div>
              <?php
              if(!empty($_POST['imie'])&&!empty($_POST['nazwisko'])){
                $imie = trim($_POST['imie']);
                $nazwisko = trim($_POST['nazwisko']);
                $data = strval($_POST['data']);
                $klasa = strval($_POST['klasa']);
                echo "<div class='result'>";
                echo "Nazywasz się {$nazwisko} {$imie}<br>";
                if(!empty($data)){
                   echo "Urodziłeś się {$data}<br>"; 
                }else{}
                if($_POST['klasa']!="nic"){
                    echo "Chodzisz do klasy {$klasa}<br>";
                }else{}
                if($_POST['gender']=="male"){
                    echo "Jesteś mężczyzną";
                }else if($_POST['gender']=="female"){
                    echo "Jesteś kobietą";
                }else if($_POST['gender']=="other"){
                    echo "Jesteś czymś innym";
                }echo "<br>";
                if(isset($_POST['zaint'])){
                    echo "Twoje zainteresowania to: ";
                    foreach($_POST['zaint'] as $zaint){
                        echo $zaint.', ';
                    }echo "<br>";
                }
                echo "</div>";
                  //tiszczesz@gmail.com
              }else{echo "<h1>Nie wypełniłeś danych potrzebnych</h1>";}
              ?>
          </div>
        </div>
        <script>
        window.onload = function(){
            document.querySelector("#form1").onsubmit =function(){
                return document.querySelector("#zgoda").checked;
            }
            document.querySelector("#data").valueAsDate = new Date();
        }
        </script>
    </body>
</html>