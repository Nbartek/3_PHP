<?php
function getConnection():?mysqli {
    $conn = new mysqli("localhost","root",null,'php_cw1');
    if($conn->connect_errno!==0) return null;
    $conn->set_charset("utf8");
    return $conn;
}

function getAll():array {
    $conn = getConnection();
    if($conn==null){
        return [];
    }
    $dane = [];
    $sqlSelect = "SELECT * FROM contacts";
    $r = $conn->query($sqlSelect);
    if(!$r) return [];
    while($row = $r->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function daneToHTML(array $dane):string {
    $html = "<ul>";
    foreach($dane as $row){
        $html .= "<li>{$row[1]} {$row[2]} email: {$row[3]}</li>";
    }

    return $html."</ul>";
}function daneToTable(array $dane):string{
    $html = "<table class='table table-striped table-hover'>";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
    $lp = 0;
    foreach($dane as $row){
        $lp++;
        $html .= "<tr><td>{$lp}<td><td>{$row[1]}<td><td>{$row[2]}<td><td>{$row[3]}<td></th>";
    }
    return $html .= "</table>";
}
function insertNew(array $dane):bool{
    $conn = getConnection();
    $sqlinsert = "INSERT INTO contacts(firstName,lastName,email) values('{$dane[0]}','{$dane[1]}','{$dane[2]}'";
    $conn->close();

}
