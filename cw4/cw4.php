<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function generuj(string $tekst, int $ile,string $typListy ='u'):string{
        $wynik = "<{$typListy}l>\n";
        for($i =0;$i<$ile;$i++){
            $wynik .= "<li>{$tekst}</li>\n";
        }
        $wynik .= "</{$typListy}l>\n";
        return $wynik;
    }
    echo generuj("Ala ma kota",8,'o');
    echo generuj("Kogo to obchodzi",4);
    ?>
</body>
</html>