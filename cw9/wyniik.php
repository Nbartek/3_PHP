<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <div class="border border-info m-4 t-3">
        <?php
        if(isset($_POST['a'])){
            $a = floatval($_POST['a']);
            $b = floatval($_POST['b']);
            $dzialanie = $_POST['wyb'];
            switch($dzialanie){
            case '+': echo "<p>{$a} + {$b} = ".($a +$b)."</p>\n";break;
            case '-': echo "<p>{$a} - {$b} = ".($a -$b)."</p>\n";break;
            case '/': echo $b==0?"<p>{$a} / {$b} = Nie dzielimy przez zero":
                 "{$a} / {$b} = ".round($a /$b,2)."</p>\n";break;
            case '*': echo "<p>{$a} * {$b} = ".($a *$b)."</p>\n";break;
            default: echo "<p>Błędne działanie</p>";
            }
        }
        ?>
        <p><a href="cw9.html">Powrót do formularza</p>
        </div>
    </div>
    </body>
</html>