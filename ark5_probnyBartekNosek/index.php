<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl1.css">
    <title>Filmy</title>
</head>
<body>
    <section id="left-panel">
        <h3>Dostepne gatunki filmów</h3>
        <ol>
            <li>Sci-Fi</li>
            <li>animacja</li>
            <li>dramat</li>
            <li>horror</li>
            <li>komedia</li>
        </ol>
        <p><a href="kadr.jpg">Pobierz Obraz</a></p>
        <p><a href="repertuar-kin.pl" target="_blank">Sparwdz reertuar kin</a></p>
    </section>
    <section id="right-up">
        <h1>FILMOTEKA</h1>

    </section>
    <section id="right-center">
        <div id="left">
                   <form action="dodaj.php" method="post">
            <label for="title">Tytuł: </label>
            <input type="text" id="title" name="title"><br>
            <label for="genre">Gatunek filmu: </label>
            <input type="number" id="genre" name="genre"><br>
            <label for="year">Rok produkcji: </label>
            <input type="number" id="year" name="year"><br>
            <label for="grade">Ocena:</label>
            <input type="number" id="grade" name="grade"><br>
            <input type="reset" value="CZYŚĆ">
            <input type="submit" value="DODAJ">
        </form> 
        </div>
        <div id="right">
            <table id="table">
                <tr>
                    <th>Tytuł</th>
                    <th>Gatunek</th>
                    <th>Rok Produkcji</th>
                    <th>Ocena</th>
                </tr>
                <?php
                require_once "connection.php";
                $sql2 = "SELECT filmy.tytul,gatunki.nazwa,filmy.rok, filmy.ocena from `filmy` inner join gatunki on filmy.gatunki_id = gatunki.id";
                $result = $conn->query($sql2);
                $data = $result->fetch_all();
                foreach($data as $row){
                    //var_dump($row[0]);
                    echo("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>");
                }
                $conn->close();
                ?>
            </table>
        </div>

    </section>
    <section id="right-down">
        <img src="kadr.jpg" alt="zdjecia filmowe">
    </section>
    <section id="footer">
        <p>Autor strony: PESEL</p>
    </section>
</body>
</html>