<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kolory</title>
</head>
<style>
    #kol1{border: 3px solid red}
    #kol2{border: 3px solid blue}
    #kol3{border: 3px solid green}
    #kol4{border: 3px solid yellow}
    #kol5{border: 3px solid purple}
</style>
<body>
    <?php
    $kolor = 3;
    switch($kolor){
        case 1 : echo "<p id='kol1'>Czerwony</p>";break;
        case 2 : echo "<p id='kol2'>Niebieski</p>";break;
        case 3 : echo "<p id='kol3'>Zielony</p>";break;
        case 4 : echo "<p id='kol4'>Żółty</p>";break;
        case 5 : echo "<p id='kol5'>Fiolet</p>";break;
        default : echo "<p id='stand'>Czarny standard</p>";
    }

    $kolor2 = 5;
    if($kolor2==1){
        echo "<p id='kol1'>Czerwony</p>";
    }
    else if($kolor2==2){
        echo "<p id='kol2'>Niebieski</p>";
    }
    else if($kolor2==3){
        echo "<p id='kol3'>Zielony</p>";
    }
    else if($kolor2==4){
        echo "<p id='kol4'>Żółty</p>";
    }
    else if($kolor2==5){
        echo "<p id='kol5'>Fiolet</p>";
    }
    else{
        echo "<p id='stand'>Czarny standard</p>";
    }
    ?>
</body>
</html>