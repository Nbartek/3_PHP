<?php
$conn = new mysqli("localhost","root",null,"3tipg_wedkowanie");
$name = trim(filter_input(INPUT_POST, 'imie'));
$surname=trim(filter_input(INPUT_POST, 'nazwisko'));
$adress=trim(filter_input(INPUT_POST, 'adres'));
$sql = "INSERT INTO `karty_wedkarskie`( `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('$name','$surname','$adress',null,null);";

$result = $conn->query($sql);

$conn->close();
header("location: karta.html");