<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_GET);
    if(isset($_GET['imie'])&&isset($_GET['nazwisko'])&&isset($_GET['data'])){
        echo "<h3>Poprawne dane -pracujemy</h3>\n";
        $imie =$_GET['imie'];
        $nazwisko =$_GET['nazwisko'];
        $data =$_GET['data'];
        if(trim($nazwisko!=''&&trim($data)!='')){
        echo "<div>Zarejestrowano: {$nazwisko} {$imie} z datą: {$data}</div>\n";
        }else{
            echo"<h3>Błedne dne. <a href='cw8_formularze.html'>Powrót</a></h3>";
        }
    }else{echo "<h3>Niepoprawne dane. <a href='cw8_formularze.html'>Powrót</a></h3>\n";}
    ?>
</body>
</html>