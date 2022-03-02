<?php function getConnection():?mysqli{
    $conn = new mysqli("localhost","root",null,"php_cw1");
    return $conn;
}

