<?php
function &getConnection(): ?mysqli
{
    $conn = new mysqli("localhost", "root", null, "3tipg_cw1");
    if ($conn->connect_errno != 0) return null;
    $conn->set_charset("utf8");
    return $conn;
}
function &getAllPlaces(int $restrict): array{
    $conn = getConnection();
    if($conn ==null) return[];
    $sql = "SELECT * FROM holidayplace WHERE price >$restrict";
    //echo $sql;
    $result = $conn->query($sql);
    $students = [];
    if($result){
        while($row = $result->fetch_array()){
            $students[] = $row;
        }
    }
    $conn->close();
    return $students;
}
function &getAllPlacesByLetters(string $restrict): array{
    $conn = getConnection();
    if($conn ==null) return[];
    $sql = "SELECT * FROM Customers
    WHERE City LIKE '%$restrict%';";
    //echo $sql;
    $result = $conn->query($sql);
    $students = [];
    if($result){
        while($row = $result->fetch_array()){
            $students[] = $row;
        }
    }
    $conn->close();
    return $students;
}
function placesToTable(array $students):string
{
    $html = "<table><tr><th>Identyfikator</th><th>Nazwa</th><th>Cena Pobytu</th><th>Akcje</th></tr>";
    $lp = 0;
    $sum = 0;
    foreach($students as $row){
        $lp++;   
        $html .="<tr><td>$lp</td><td>$row[1]</td><td>$row[2] zł</td><td>
        <a href='addUpdate.php?id={$row[0]}&name={$row[1]}&price={$row[2]}'> Edytuj</a>
        <a href='delete.php?id={$row[0]}&name={$row[1]}&price={$row[2]}'> Usuń</a>
        </td></tr>";
        $sum= $sum + $row[2];
    }
    $html .="<tr><td id='suma' collspan='3'>Sum: $sum zł</td></tr>";
    return $html .="</table>";
}
$nazwa="";
$cena = 0;
if(isset($_POST['save'])&&!empty($_POST['name'])&&!empty($_POST['decimal'])){
    $nazwa=$_POST['name'];
    $cena = $_POST['decimal'];
    getConnection()->query("INSERT into holidayplace ( name, price) Values('$nazwa','$cena')");
    header("location: index.php");

}