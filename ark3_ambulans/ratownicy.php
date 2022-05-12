<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styl3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zespoły ratownicze</title>
</head>
<body>
    <section id="upLeft">
        <h2>Dodanie zespołu ratowniczego</h2>
    </section>
    <section id="upCenter">
        <p>Kontakt:<br> 022 222 11 333</p>
    </section>
    <section id="upRight">
        <img src="obraz.jpg" alt="Ratownicy">
    </section>
    <section id="main">
        <h3>Dodaj nowy zespół</h3>
        <form  id="ambulans" action="" >
        <label for="karetka">Numer karetki</label><br>
        <input type="number" id="karetka" name="karetka"><br>
        <label for="jeden">Imie i nazwisko pierwszego ratownika: </label><br>
        <input type="text" name="jeden" id="jeden"><br>
        <label for="dwa">Imie i nazwisko drugiego ratownika: </label><br>
        <input type="text" name="dwa" id="dwa"><br>
        <label for="trzy">Imie i nazwisko trzeciego ratownika: </label><br>
        <input type="text" name="trzy" id="trzy"><br>
        <input type="reset"  value="CZYŚĆ">
        <input type="submit" name="submit" id="submit" value="DODAJ">
<!--            <input type="button" name="submit" id="submit" value="DODAJ">-->
    </form>
    </section>
    <section id="mainRight">
        <table id="tabela">
            <tr>
                <th>Nr Karetki</th><th> Pierwszy Ratownik</th><th>Drugi Ratownik</th><th>Trzeci Ratownik</th>
            </tr>
            <?php
            require_once "display.php";
            ?>

        </table>
    </section>
    <section id="downLeft">
        <a href="../ark3_ambulans/PESEL/kwerendy.txt">Zobacz kwerendy</a>
    </section>
    <section id="downCenter">
        <h5>Przypominamy numery alarmowe</h5>
        <ol type="a">
            <li>112</li>
            <li>999</li>
        </ol>
    </section>
    <section id="downRight">
        <p>Autor<br>PESEL</p>
    </section>
    <script src="jquery-3.6.0.js"></script>
    <script src="dodanie.js"></script>
</body>
</html>