<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ćwiczenie 11 - formularze</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
        .line{
            margin: 20px;
        }
        label{display:inline-block;
        width: 160px;
        text-align: right;
        padding-right:6px;}
        </style>
    </head>
    <body>
        <div>
            <form action="wynik.php" method="post">
            </fieldset>
            <legend>Tworzenie tabeli</legend>
            <div class="line"><label for="rows">Ilość wierszy:</label><input type="number" name="rows" id="rows"></div>
            <div class="line"><label for="cols">Ilość kolumn:</label><input type="number" name="cols" id="cols"></div>    
            <input type="submit" value="Generuj">
            </fieldset>
            <form>
        </div>
    </body>
</html>