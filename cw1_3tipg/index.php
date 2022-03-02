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
    <div id="line"><label for="restrict">Od jakie ceny wyswitlać: </label>
    <input type="number" name="restrict" step="0.01" id="restrict" value= "0">
    </div>
    <div id="line"><input type="submit" value="Zapisz"></label>
    </div>
    </form>
        <?php
        require_once 'functions.php';
        if(isset($_POST['restrict'])){
                $restrict = $_POST['restrict'];
                 $rest = number_format($restrict); 
                //var_dump($rest);
               $students = getAllPlaces($restrict);
                echo placesToTable($students); 
        }else{
            echo "Podaj zakres ceny";
        }
    ?>
    <div id="bl" ><a href="add.php">Dodaj nową placówkę</a></div>
    <div id="dl" ><a href="segregate.php">Segreguj po nazwie</a></div>
</body>
</html>