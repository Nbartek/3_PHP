<?php
require_once"conn.php";
                            //Read
function getAll($sql):array {
    $conn = getConnection();
    if($conn==null){
        return [];
    }
    $dane = [];
    $r = $conn->query(strval($sql));
    if(!$r) return [];
    while($row = $r->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
  //  var_dump($dane);
    return $dane;
}
function daneToTable(array $dane): string {
    $html = "<table class='tabela'>";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Prezent<th/></tr>";
    $lp = 0;
    foreach($dane as $row){
        $lp++;
        $html .= "<div class='dropdown'>
                    <tr><td>{$lp}</td><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>"
                        ."<td><button class='btnEditDrop'>Edytuj</button></td>"
                            ."<div class='btnDropEdit-content'>
                                <a class='editLook' href='editKid.php?id={$row[0]}'>Edytuj dziecko</a>
                                <a class='editLook' href='editPresent.php?id={$row[0]}'>Edytuj prezent</a>
                            </div>"
                        ."<td><button class='btnDeleteDrop'>Usuń</button></td>"
                            ."<div class='btnDropDelete-content'>
                                <a class='deleteLook' href='deleteKid.php?id={$row[0]}'>Usuń dziecko</a>
                                <a class='deleteLook' href='deletePresent.php?id={$row[0]}'>Usuń Prezent</a>
                            </div>
                </div>";
                
    }
    return $html."</table>";
}
                                //Create
function insertNewKid(array $dane):bool {
    $conn = getConnection();
    $sqlInsert = "INSERT INTO `dzieci`( `id_prezentu`, `Imie`, `Nazwisko`, `CzyGrzeczny`) VALUES ([value-2],[value-3],[value-4],[value-5])";
   // echo $sqlInsert;
    $result = $conn->query($sqlInsert);

    $conn->close();
    return $result;
}
function insertNewPresent(array $dane):bool{
    $conn = getConnection();
    $sqlInsert = "INSERT INTO `dzieci`( `id_prezentu`, `Imie`, `Nazwisko`, `CzyGrzeczny`) VALUES ([value-2],[value-3],[value-4],[value-5])";
   // echo $sqlInsert;
    $result = $conn->query($sqlInsert);

    $conn->close();
    return $result;
}
                                //Edit
function editKid(array $dane) {}
function editPresent(array $dane) {}
                                //Delete
function deleteKid(array $dane) {}
function DeletePresent(array $dane) {}
                                