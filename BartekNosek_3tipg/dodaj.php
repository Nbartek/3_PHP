<?php
$conn = new mysqli('localhost','root',null,'3tipg_GIM_dane');

$title = trim($_POST['title']);
$genre= trim($_POST['genre']);;
$year = trim($_POST['year']);;
$grade = trim($_POST['grade']);;

$sql = "INSERT INTO `filmy`(`gatunki_id`,`tytul`,`rok`,`ocena`) VALUES ($genre,'$title',$year,$grade)";
//var_dump($sql);
$conn->query($sql);
echo('Film '.$title.' został dodany do bazy');
$conn->close();