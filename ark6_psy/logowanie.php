<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section id="baner">
        <h1>Forum wielbiciel psów</h1>
    </section>
    <section id="leftblock">
<img src="obraz.jpg" alt="foksterier">
    </section>
    <section id="rightblock1">
<h2>Zapisz się</h2>
<form method="post" action="logowanie.php">
    <label for="login">login: </label>
    <input type="text" name="login" id="login"><br>
    <label for="haslo">haslo: </label>
    <input type="password" name="haslo" id="haslo" ><br>
    <label for="repeat">powtórz haslo: </label>
    <input type="password" name="repeat" id="repeat"><br>
    <input type="submit" value="Zapisz">
</form>
<?php
 $conn = new mysqli('localhost','root',null,'3tipg_psy');
$login = trim($_POST['login']);
$haslo = trim($_POST['haslo']);
$repeat = trim($_POST['repeat']);
//var_dump($login);
$sql = "Select login from uzytkownicy where login like '$login'";
$result = $conn->query($sql);
$dingus = $result->fetch_row();
//var_dump($dingus);
if($login ==""||$haslo==""||$repeat==""){

    $dingus = $result->fetch_array();
    echo("<p>wypełnij wszsytkie pola</p>");
    //var_dump($result);
}
else if($dingus !=null){
echo("<p>login wystepuje w bazie danych, konto nie zostało dodane</p>");
//var_dump($result);
} 
else if(trim($haslo)!=trim($repeat)){
    echo("<p>hasła nie są takie same, konto nie zostało dodane</p>");
}else{
    $password = sha1($haslo);
   //var_dump($result);
   $sql2 = "INSERT INTO `uzytkownicy`( `login`, `haslo`) VALUES ('$login','$password')";
   $conn->query($sql2);
}
 $conn->close()
?>
    </section>
    <section id="rightblock2">
        <H2>Zapraszamy wszytkich</H2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupic psa</li>
            <li>tych, co lubia psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </section>
    <section id="footer">
        Strone wykonał PESEL
    </section>
    
</body>
</html>