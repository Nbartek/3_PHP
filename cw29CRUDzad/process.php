<?php

session_start();

function getConnection():mysqli{
$mysqli = new mysqli('localhost','root',null,'php_zadcrud') or die(mysqli_error($mysqli));   
return $mysqli; 
}
$imie='';
$nazwisko='';
$telefon='';
$urodziny='';

   if(isset($_POST['save'])&&!empty($_POST['imie'])&&!empty($_POST['nazwisko'])&&!empty($_POST['telefon'])&&isset($_POST['urodziny'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
    $urodziny = $_POST['urodziny'];
    

    getConnection()->query("INSERT into users ( name, Surname, phone, birthdate) Values('$imie','$nazwisko','$telefon','$urodziny')");

    $_SESSION['message'] = "Rekord został zapisany";
header("location: index.php");
}else{} 




  if(isset($_GET['delete'])){
$id = $_GET['delete'];

    getConnection()->query("DELETE from users where id=$id");
    
    $_SESSION['message'] = "Rekord został usunięty";
    header("location: index.php");
}  


if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = getConnection()->query("SELECT * from users where id=$id");
    if($result->num_rows){
        $row = $result->fetch_array();
        $imie = $row['Name'];
        $nazwisko = $row['Surname'];
        $telefon = $row['Phone'];
        $urodziny = $row['Birthdate'];
    }
}

