<?php
function display(){
    $conn = new mysqli("localhost", 'root', null, "3tipg_ambulans");
    $sql = "SELECT nrKaretki,ratownik1,ratownik2,ratownik3 FROM `ratownicy`";
    $result = $conn->query($sql);
    $rows = $result->fetch_all();
    foreach ($rows as $row){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
    }
}
display();