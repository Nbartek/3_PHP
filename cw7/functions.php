<?php
function getFromDb():array{
    return[
        ["Antoni","Tomecki","468762458"],
        ["Rad","Qomecki","468762789"],
        ["MOnika","Fomecki","468762458"],
        ["Ronislaw","Vomecki","468762458"],
        ["Karolina","Momecki","461682458"],
        ["Bożena","Uomecki","468712358"],
        ["Tomislaw","Aomecki","461492458"],
        ["Władek","Romecki","468765158"],
        ["Ródolf","Bomecki","468778658"],
        ["Arthur","Komecki","468734958"],
        ["Dawid","Domecki","468766998"]
    ];
}
function ToTable(array $dane):string{
    $html = "<table>\n";
    $html .="<tr><th>lp</th><th>Imię</th><th>Nazwisko</th><th>Telefon</th>";
    $i=0;
    foreach($dane as $row){
        $i++;
        $html.="<tr><td>{$i}</td><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>";
    }
    return $html."</table>";
}
function getAsscocArray():array{
    return[
        "white"=> "biały",
        "green"=> "zielony",
        "yellow"=> "żółty",
        "brown"=> "brązowy",
        "blue"=> "niebieski",
    ];
}function colorsToSelect(array $colors):string{
    $html = "<select id='colors'>\n";
    foreach($colors as $ang =>$pol){
        $html.="<option value='{$ang}'>{$pol}</option>\n";
    }
    return $html.="</select>\n";
}