<?php
require_once "functions.php";
if(filter_has_var(INPUT_POST,'name')){
    
    $name = trim(filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING));
    $decimal = trim(filter_input(INPUT_POST,'decimal',FILTER_SANITIZE_STRING));
    
    if($name!=='' && $decimal!==''){
        getConnection()->query("INSERT into holidayplace ( name, price) Values('$name','$decimal')");
        header("location: index.php");
    }else{
        header("Location: add.php");
    }
}else{
    header("Location: add.php");
}