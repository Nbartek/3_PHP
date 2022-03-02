<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cw6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Tablice wstęp</h1>
        <?php 
            $t1 = array(1,2,3,4,67,'true',true,array(1,32,44,55));
            var_dump($t1);
            print_r($t1);
            $t1[] = "nowy"; //dodanie na koncu tablicy
            var_dump($t1);
            $t1[6] = 'zmieniony';
            var_dump($t1);
            $t1[12] = 'element 12';
            var_dump($t1);
        ?>
        <h1>Operacje podstawowe na tablicach</h1>
        <?php 
            $t2 = [12,3,44,"ssss",[3,4,5],7,true];
            var_dump($t2);
            foreach($t2 as $elem){
                if(is_array($elem)) print_r($elem);
                else echo "<div>{$elem}</div>\n";
            }
            unset($t2[2]);
            foreach($t2 as $elem){
                if(is_array($elem)) print_r($elem);
                else echo "<div>{$elem}</div>\n";
            }
            for($i=0;$i<count($t2);$i++){
                if(is_array($t2[$i])) print_r($t2[$i]);
                else echo "<div>{$t2[$i]}</div>\n";
            }
        ?>
        <h1>Owoce</h1>
        <?php 
        $owoce = array('Mango','Banan','Jablko','Gruszka','Śliwka');
        sort($owoce);
        function getList(array $dane):string{
            $html ="<ol>\n";
            foreach($dane as $owoc){
                $html .="<li>{$owoc}</li>\n";
            }
            $html .="</ol>\n";
            return $html;
        }
        echo getList($owoce);
        ?>
        <h1>Potegi</h1>
        <?php
        function fillArray(int $size){
            $pow =[];
            for($i=0;$i<$size;$i++){
                $pow[] = $i*$i;
            }
            return $pow;
        }
        var_dump(fillArray(20));
        ?>
        
    </body>
</html> 