<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
        table{border-collapse:collapse;}
        table, th,tr,td{border:solid 1px black;}
        th{background-color: slateblue;}
        </style>
    </head>
    <body>
    <?php
    function fillArray(int $size):array{
        $pow =[];
     for($i=0;$i<=$size;$i++){
         $pow[] = $i * $i;
     }
     return $pow;
    }function toTable(array $dane):string{
        $html = "<table><tr><th>x</th><th>x<sup>2</sup></th></tr>\n";
          for($i = 0;$i < count($dane);$i++){
              $html .="<tr><td class='right'>{$i}</td><td class='right'>{$dane[$i]}</td></tr>";
          }
        $html .= "</table>\n";
        return $html;
    }
    echo toTable(fillArray(10));
    var_dump(fillArray(30));
    ?>
    </body>
</html>