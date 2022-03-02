<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styl6.css" rel="stylesheet">
    <title>Odloty samolotów</title>
</head>
<body>
    <section id="baner1">
        <h2>Odloty samolotów</h2>
    </section>
    <section id="baner2">
    <img src="zad6.png" alt="logotyp">
    </section>
    <section id="main1">
    <h4>tabela odlotów</h4>
    <table>
        <tr>
            <th>lp.</th>
            <th>numer rejsu</th>
            <th>czas</th>
            <th>kierunek</th>
            <th>status</th>
        </tr>

    <?php
    require_once "conn.php";
    $conn = new mysqli("localhost","root",null,"3ti_ark1_2021");
    $sql = "SELECT id,nr_rejsu, czas, kierunek, status_lotu FROM `odloty` ORDER BY czas DESC;";
    $result = $conn->query($sql);
    $lp = 0;
    $aow;
    $planes = [];
    while($row =$result->fetch_array()){
        $planes[] = $row;
    }
        foreach($planes as $row){
            //$aow = strlen($row(3));
            //var_dump($aow);
            if(strlen($row[3]) >=8){
                echo("<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th class='colorki'>$row[3]</th><th>$row[4]</th></tr>") ;
            }else if(strlen($row[3])<=6){
                echo("<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th class='colour'>$row[3]</th><th>$row[4]</th></tr>") ;
            }else{
             echo("<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></tr>")  ; 
            }

          $lp++;
        }
        $conn-> close();

    ?>
    </table>

    </section>
    <section id="stamp1">
<a href="kw1.png" target="_blank">Pobierz obraz</a><br>
<a href="new_flights.php">Dodaj Lot</a>
    </section>
    <section id="stamp2">
<?php
$c_name = "user";
if(!isset($_COOKIE[$c_name])){
    echo("<p>Dzień dobry! Sprawdź regulamin naszej strony”</p>");
}else{
    echo("<p>Miło nam, że nas znowu 
    odwiedziłeś</p>");
}
setcookie($c_name,true, time()+3600,"/");
?>
    </section>
    <section id="stamp3">
        Autor PESEL
    </section>
</body>
</html>