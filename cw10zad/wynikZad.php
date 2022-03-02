<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     if(!empty($_POST['name'])&&!empty($_POST['nazw'])){
         $imie = strval($_POST['name']);
         $nazwisko = strval($_POST['nazw']);
        $date = strtolower($_POST['data']);
        $date1 = strtotime($date);
        $year = date('Y',$date1); 
        $datenow = date('Y');;
        $lata = $datenow-$year;
        echo "Nazywasz się {$imie} {$nazwisko} i rocznikowo masz {$lata} lat/a";
     };
    ?>
    <p><a href="cw10zad.html">Powrót do formularza</p>
</body>
</html>