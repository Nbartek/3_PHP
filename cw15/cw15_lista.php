<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabela lub Lista</title>
    <link rel="stylesheet" href="cw15.css">
</head>
<body>
    <h2><a href="cw15.php">Nowy produkt</a></h2>
    <form method="post">
        <div class="line">
            <select name="forma" id="forma">
                <option value="tabela">Tabela</option>
                <option value="lista">Lista</option>
                <option value="punkty">W punktach</option>
            </select>
        </div>
        <div class="line">
            <input type="submit" value="Wyświetl">
        </div>
    </form>
    <section class="wynik">
            <?php
                require "functions.php";
                $dane = getAllFromFile("produkty.txt");  
                if(isset($_POST['forma'])){
                switch($_POST['forma']){
                    case 'tabela':
                        echo showInTable($dane);
                    break;
                    case 'lista':
                        echo showInList($dane);
                    break;
                    case 'punkty':
                        echo showInPoints($dane);
                    break;
                    default;
                }}
            ?>
        </section>
</body>
</html>