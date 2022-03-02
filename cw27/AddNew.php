<?php
require_once "funtions.php";
var_dump(($_POST));
if(filter_has_var(INPUT_POST,'imie')){
    echo "Ok";
    $imie = trim(filter_input(INPUT_POST,'imie',FILTER_SANITIZE_STRING));
    $nazwikso = trim(filter_input(INPUT_POST,'nazwikso',FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING));
    if($imie!=''&&$nazwsiko!='' && $email!=''){
        $result = insertNew([$imie,$nazwikso,$email]);
    }
    header("Location: cw27.php");
}else{
    echo "Error";
    header("Location: cw27.php");
}

