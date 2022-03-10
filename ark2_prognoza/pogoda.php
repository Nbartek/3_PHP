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
        class AvgDisplay
        {
            public $tempN;
            public $tempD;
            public $rain;
            public $pressure;

            function set_avg($tempN, $tempD, $rain, $pressure)
            {
                $this->tempD = $tempD;
                $this->tempN = $tempN;
                $this->rain = $rain;
                $this->pressure = $pressure;
            }
            function get_display()
            {
                return " 
                Średnia temperatura w nocy: $this->tempN<br>
                Średnia temperatura w dzień: $this->tempD <br>
                Średnia opadów: $this->rain <br>
                Średnia ciśnienia: $this->pressure <br>
                ";
            }
        }
        class AvrAll
        {
            public $avg;
            function set_avg($avg)
            {
                $this->avg = $avg;
            }
            function get_avg()
            {
                return round($this->avg,2);
            }
            function countAvg($array)
            {
                $i = 0;
                $result = 0;
                foreach ($array as $rows) {
                    $result = $result + intVal($rows);
                    //var_dump($rows[0]);
                    $i++;
                }
                $resulter = $result / $i;
                return $resulter;
            }
            function getFromSQL($records, $i)
            {
                $aDayT = array();
                foreach ($records as $record) {
                    array_push($aDayT, $record[$i]);
                }
                return $aDayT;
            }
        }



        $nightTArr = new AvrAll();
        $dayTArr = new AvrAll();
        $rainArr = new AvrAll();
        $pressureArr = new AvrAll();
        $nightTArr->set_avg($nightTArr->countAvg($nightTArr->getFromSQL($records, 3)));
        $dayTArr->set_avg($dayTArr->countAvg($dayTArr->getFromSQL($records, 4)));
        $rainArr->set_avg($rainArr->countAvg($rainArr->getFromSQL($records, 5)));
        $pressureArr->set_avg($pressureArr->countAvg($pressureArr->getFromSQL($records, 6)));
        $display = new AvgDisplay();
        $display->set_avg($nightTArr->get_avg(),$dayTArr->get_avg(),$rainArr->get_avg(),$pressureArr->get_avg());
        echo($display->get_display());
        //var_dump($nightTArr);
        $conn->close();
        ?>
    </div>
</body>

</html>