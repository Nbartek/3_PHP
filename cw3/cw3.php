<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for</title>
</head>
<body>
    <h1>Petla for:
    <span style='color:green'>($i=0;$i;&lt;10;$i++){...}</span></h1>
<?php
    const ZAKRES = 8;
    echo"<ol>\n";
        for($i=1;$i<=ZAKRES;$i++){
            echo "<li>Element listy numerowanej {$i}</li>\n";
        }
    echo"</ol>\n";
?>
<h1> Petla while:<span style='color:green'>($i &lt;10){...}</span></h1>
<?php
$suma=0;
$licznik=0;
$ilZer = 0;
$maximum = PHP_INT_MIN;
$minimum = PHP_INT_MAX;
while($suma<100){
    $liczba= random_int(0,10);
    echo $liczba." ";
    $suma+=$liczba;
    $licznik++;
    $srednia = ($suma/$licznik );
    if($liczba==0) $ilZer++;
    if($maximum<$liczba) $maximum=$liczba;
    if($minimum<$liczba) $minimum=$liczba;
}
echo "suma: {$suma} ilość liczb: {$licznik} i średnia: ".round(($srednia),2)."<br>\n";
echo "ilość zer: {$ilZer} maksymalna: {$maximum} minimalna: {$minimum} <br>\n";
?>
   <h1>Pętla do {...} while()</h1>
   <?php
   $losowa = 0;
   do{
       $losowa = random_int(0,20);
       echo $losowa.' ';
   }while($losowa!=0);
   ?> 
</body>
</html>