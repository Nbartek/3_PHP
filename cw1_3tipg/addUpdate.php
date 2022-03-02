<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw1.css">
    <title>Dodaj Kurorty</title>
</head>
<body>
    <?php
    require_once "functions.php";
    ?>
    <div id="conteiner">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
    <div id="line"><label for="name">Nazwa placówki</label>
    <input type="text" name="name" id="name" value="<?php
    echo $_GET['name'];?>">
    </div>
    <div id="line"><label for="price">Cena pobyty</label>
    <input type="number" name="decimal" step="0.01" id="decimal" value="<?php
     echo $_GET['price'];
    ?>">
    </div>
    <div id="line"><input type="submit" value="Zapisz"></label>
    
    </div>
    </form>
    </div>
</body>
</html>