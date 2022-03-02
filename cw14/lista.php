<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw14.css">
    <title>Konferencja Naukowa</title>
</head>
<body>
    <h1>Konferencja Nukowa</h1>
    <div id="main">
    <nav><ul>
        <li><a href="lista.php">Zobacz listę uczestników</a></li>
        <li><a href="cw14.php">Zarejestruj uczestnika</a></li>
    </ul></nav>
    <section>
    <?php
    require "function.php";
    $dane = getAllFromFile("rejestracja.txt");
    //var_dump($dane);
    echo showInTable($dane);
    ?>
    </section>
    </div>
</body>
</html>