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
            $conn = new mysqli('localhost', 'root', null, '3tipg_prognoza');
            $sql = "SELECT * FROM `pogoda` WHERE miasta_id = 1 ORDER BY data_prognozy ASC";
            $sql2 = "SELECT round(AVG(temperatura_noc),2), round(AVG(temperatura_dzien),2), round(AVG(opady),2), round(AVG(cisnienie),2) FROM `pogoda` WHERE miasta_id = 1 ORDER BY data_prognozy ASC";
            $result = $conn->query($sql);
            $result2 = $conn->query($sql2);
            $records = [];
            $records = $result->fetch_all();
            $record2 = $result2->fetch_array();
            foreach ($records as $record) {
                switch ($record) {
                    case $record[3] < 10:
                        echo ("<tr><td >$record[2]</td><td class='cold' >$record[3]</td><td  >$record[4]</td><td>$record[5]</td><td>$record[6]</td></tr>");
                        break;
                    case $record[4] > 20:
                        echo ("<tr><td >$record[2]</td><td >$record[3]</td><td class='hot' >$record[4]</td><td>$record[5]</td><td>$record[6]</td></tr>");
                        break;
                    case $record[3] < 10 && $record[4] > 20:
                        echo ("<tr><td >$record[2]</td><td class='cold' >$record[3]</td><td class='hot' >$record[4]</td><td>$record[5]</td><td>$record[6]</td></tr>");
                        break;
                    case $record[3] >= 10 && $record[4] <= 20:
                        echo ("<tr><td >$record[2]</td><td ' >$record[3]</td><td  >$record[4]</td><td>$record[5]</td><td>$record[6]</td></tr>");
                        break;
                }
            }

            
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
    <div>
        <h2>Z pomocą sql</h2>
        <?php
        echo (" Średnia temperatura w nocy: $record2[0]<br>");
        echo (" Średnia temperatura w dzień: $record2[1] <br>");
        echo (" Średnia opadów: $record2[2] <br>");
        echo (" Średnia ciśnienia: $record2[3] <br>");
        ?>
    </div>
    <div>
        <h2>Z pomocą klasy</h2>
        <?php
        class AvrAll
        {
            public $rain;
            public $pressure;
            public $nightT;
            public $dayT;

            function constructor($dayT, $nightT, $pressure, $rain)
            {
                $this->$dayT = $dayT;
                $this->$nightT = $nightT;
                $this->$pressure = $pressure;
                $this->$rain = $rain;
            }
            function getFromSQL($records,$i){
                $aDayT = array();
                foreach($records as $record){
                    $record[$i] = $aDayT;  
                }
                return $aDayT;
            }
            function AvrCounter($array){
                $i = 0;
                $result = 0;
                foreach($array as $rows){
                    $result = $result + $rows[0];
                    $i++;
                }
                $resulter = $result/$i;
                return $resulter;
            }
        }
            
        $avrAll = new AvrAll;
        $conn->close();
        ?>
    </div>
</body>

</html>