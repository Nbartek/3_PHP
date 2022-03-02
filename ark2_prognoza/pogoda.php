<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <section id="upLeft">
        <img src="logo.png" alt="meteo">
    </section>
    <section id="upCenter">
        <h1>Prognoza dla Wrocławia</h1>
    </section>
    <section id="upRight">
        <p>maj,2019</p>
    </section>
    <section id="main">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $conn = new mysqli('localhost','root',null,'3tipg_prognoza');
                $sql = "SELECT * FROM `pogoda` WHERE miasta_id = 1 ORDER BY data_prognozy ASC";
                $result = $conn ->query($sql);
                $records = [];
                $records = $result->fetch_all();
                foreach($records as $record){
                    echo("<tr><td>$record[2]</td><td>$record[3]</td><td>$record[4]</td><td>$record[5]</td><td>$record[6]</td></tr>");
                }
                $conn->close();
            ?>
        </table>
    </section>
    <section id="left">
        <img src="obraz.jpg" alt="Polska,Wrocław">
    </section>
    <section id="right">
        <a href="..//ark2_prognoza/PESEL/kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="stamp">
        <p>Stronę wykonał: PESEL</p>
    </section>
</body>
</html>