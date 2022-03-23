<?PHP
$conn = new mysqli("localhost",'root',null,"3tipg_ambulans");
$conn = trim($_POST['jeden']);
$conn = trim($_POST['dwa']);
$conn = trim($_POST['trzy']);
$conn = strval($_POST['karetka']);
$sql = "INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('20','Adam Nowak','Adam Nowak','Anna Nowakowska')";

