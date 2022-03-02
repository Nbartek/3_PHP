<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw26.css">
    <title>cw 13- mysqli-wstęp</title>
</head>
<body>
<h1> Cwiczenie 13 mysqli wstęp</h1>
<?php
$conn = new mysqli("localhost","root",null,"php_cw1");
var_dump($conn);
if($conn->connect_errno!=0) die("Error DB");
echo "<p>dalej<p/>";
$result1 = $conn->set_charset("utf8");//typowe dla mysqli

//$conn->query("SET NAMES utf8");//bezpośrednio w sql
var_dump($result1);

$selectResult = $conn->query("SELECT * FROM contacts");
//var_dump($selectResult);

//$data = $selectResult->fetch_all();
//var_dump($data);

//while($row = $selectResult->fetch_all()){
//    var_dump($row);
//}

while($row = $selectResult->fetch_row()){
    echo "<p>{$row[0]} {$row[1]}</p>";
}
$conn->close();
?>
<div>
<a href="insert.php">Wprowadź ... coś</a>
</div>
    
</body>
</html>