<?php
require_once "functions.php";
//if(filter_has_var(INPUT_GET,'name')){
    $name = filter_input(INPUT_GET,'name');
    if($_GET['id']!==''){
        getConnection()->query("DELETE from holidayplace WHERE id=".$_GET['id']."");
        header("location: index.php");
    }else{
        header("Location: add.php");
    }

/*}else{
  header("Location: dfmnfghjbf.php");
}*/