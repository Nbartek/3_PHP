<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw1.css"> 
    <title>Places for Holiday</title>
</head>
<body>
    <h1>Lista Lokacji</h1>

    <form method="POST">
    <div id="line"><label for="segregate">Czego szukasz: </label>
    <input type="string" name="segregate" id="segregate" value= "Mo">
    </div>
    <div id="line"><input type="submit" value="Zapisz"></label>
    </div>
    </form>
        <?php
        require_once 'functions.php';
        if(isset($_POST['segregate'])){
                $segregate = $_POST['segregate'];
                //var_dump($rest);
               $students = getAllPlacesByLetters($segregate);
                echo placesToTable($students); 
        }else{
            echo "Podaj zakres ceny";
        }
    ?>
    <div id="bl" ><a href="add.php">Dodaj nową placówkę</a></div>
    <div id="dl" ><a href="segregate.php">Segreguj po nazwie</a></div>
</body>
</html>