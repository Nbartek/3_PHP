<?php
function getConnection():?mysqli {
    $conn = new mysqli("localhost","root",null,"3tipg_strona_swiateczna");
    if($conn->connect_errno!==0) return null;
    $conn->set_charset("utf8");
    return $conn;
}


?>