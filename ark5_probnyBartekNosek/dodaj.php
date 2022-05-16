<?php
require_once "connection.php";

$title = trim($_POST['title']);
$genre= trim($_POST['genre']);;
$year = trim($_POST['year']);;
$grade = trim($_POST['grade']);;

$sql = "INSERT INTO `filmy`(`gatunki_id`,`tytul`,`rok`,`ocena`) VALUES ($genre,'$title',$year,$grade)";
//var_dump($sql);

$conn->query($sql);
echo('Film '.$title.' został dodany do bazy\n');
echo('<a href="index.php">Powrót do strony głównej>');
$conn->close();