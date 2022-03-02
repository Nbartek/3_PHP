<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ćwiczenie 2 - php</title>
</head>
<body>
    <?php
    $a = "ala ma kota";
    define("stala",34);
    echo '<p>Stała wynosi: '.stala.'</p>';
    var_dump($a);

    $a = 45;
    const stala2 = 20;
    var_dump($a);
    

    if($a<stala2){
        echo "<p>Zmienna jest mniejza od: ".stala2."</p>";
        echo "<img src=".'zamalo.png'.">";  
    }
    else if($a>stala2){
        echo "<p>Zmienna jest wieksza od: ".stala2."</p>";
        echo "<img src=".'zad_duzo.png'.">";   
    }
    else{
        echo "<p>Zmienna jest równa od: ".stala2."</p>";   
        echo "<img src=".'rowno.png'.">";  
    }

    $wybor = true;
    $wynik = $wybor ? "PRAWDA" :"FAŁSZ";
    echo "<h4>{$wynik}</h4>";

    $dzien =6;
    switch($dzien){
        case 1 : echo "<p>Poniedziałek</p>";break;
        case 2 : echo "<p>Wtorek</p>";break;
        case 3 : echo "<p>Środa</p>";break;
        case 4 : echo "<p>Czwartek</p>";break;
        case 5 : echo "<p>Piątek</p>";break;
        case 6 : echo "<p>Sobota</p>";break;
        case 7 : echo "<p>Niedziela</p>";break;
        default : echo "<p style='color:red'>Błędne dane</p>";
    }
    ?>
</body>
</html>