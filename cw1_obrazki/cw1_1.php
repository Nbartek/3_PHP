<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Początki Php... są trudne</title>
    <style>
    .sr {
        text-align: center;
    }
    #kol {
        color:green;
    }
    #pod{
        border-bottom: solid 2px yellow;
    }
    .ramka{
        border: solid 1px darkorchid;
        padding: 10px;
    }
    </style>
</head>
<body>
<h1> Cwiczenie 1 z php </h1>
    <?php
        echo "<h3> A to produkuje php</h3>\n";
        echo "<h3>Inny tekst</h3>\n";
        //przetwazane przez interpretator "...\n....."
        echo "<h1 class='sr'>Bartek Nosek</h1>\n";
        echo "<h2 id='kol' class='sr'>2TIP/g</h2>\n";
        echo "<h3 id='pod' class='sr'>rok szkolny 2020/2021</h3>\n";
    ?>
<h2> Zmienne w php wstęp</h2>
<?php
    $imie="Adam";
    $liczba = 34.7;
    echo '<h3>Inny \n text</h3>\n';
    //nie są przetwazane przez '....'
    echo '<p class="ramka"> imie = '.$imie. '</p>';
    echo "<p>liczba = {$liczba}</p>";
    var_dump($imie);
    var_dump($liczba);
    $c = 34.78;
    $d = true;
    var_dump($c);
    var_dump($d);
    $a = 34;
    $b = -12;
    echo "{$a} + {$b} =".($a+$b). '<br>';
    echo "{$a} - {$b} =".($a-$b). '<br>';
    echo "{$a} * {$b} =".($a*$b). '<br>';
    echo "{$a} / {$b} =".round(($a/$b),2). '<br>';
?>
</body>
</html>