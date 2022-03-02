<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{border: solid brown 2px;border-collapse: collapse;}
    
    </style>
</head>
<body>
    <?php
    function kwadrat(int $ilewierszy):string{
        $tabela = "<table><tr><td>X</td><td>X<SUP>2</SUP></tr>\n";
        for($i=0;$i<$ilewierszy;$i++){
            $tabela.="<tr><td>{$i}</td><td>".($i*$i)."</td><tr>";
        }
        $tabela.="</table>";
        return $tabela;
    }
    echo kwadrat(9);
    ?>
</body>
</html>