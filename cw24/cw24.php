<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cwiczenie 12 - biblioteka</title>
</head>
<body>
    <h1>Cwiczenie 12- biblioteka</h1>
    <?php
    require_once "file_repo.php";
 $repo = new FileRepo();
 $dane = $repo->getItems();
 var_dump($dane);
    ?>
</body>
</html>