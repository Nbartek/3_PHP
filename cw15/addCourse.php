<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw15.css">
    <title>Dodaj Kursy</title>
</head>
<body>
    <div id="conteiner">
    <form action="addNewCourse.php" method="POST">
    <div id="line"><label for="name">Nazwa kursu</label>
    <input type="text" name="name" id="name">
    </div>
    <div id="line"><label for="date">Data rozpoczęcia</label>
    <input type="date" name="date" id="date">
    </div>
    <div id="line"><input type="submit" value="Zapisz"></label>
    
    </div>
    </form>
    </div>
</body>
</html>