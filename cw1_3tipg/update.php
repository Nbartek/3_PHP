<?php
require_once "functions.php";
if(filter_has_var(INPUT_POST,'name')){
    $name = trim(filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING));
    $decimal = trim(filter_input(INPUT_POST,'decimal',FILTER_SANITIZE_STRING));
    $id = trim(filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING));
    
    getConnection()->query("UPDATE holidayplace SET name = '$name', price= '$decimal' WHERE id = '$id'");
    header("Location: index.php");
}
