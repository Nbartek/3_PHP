<?php
const SecInYear = 3600*24*365;
function getRandomDate(int $yearD,int $yearU):string{
if($yearD>$yearU) swap($yeadD,$yearU);
$date = random_int($yearD*SecInYear,$yearU*SecInYear);
return date("d-m-Y",$date);
}
function swap(int & $a,int & $b):void{
    $temp = $a;
    $a =$b;
    $b=$temp;
}
function dateToFile(string $filename,int $d=20,int $u=60,int $count=20):void{
    $f = fopen($file,'w');
    if(!$f)return;
    for($i=0;$i<$count;$i++){
        $line = getRandomDate($d,$u).'|'.getRandomDate($d,$u).PHP_EOL;
        fwrite($f,$line);
    }
    fclose($f);
}
function dateToTable(string $filename):void{
    $d1=file($filename,FILE_IGNORE_NEW_LINES);
    $dates = [];
    foreach($d1 as $row){
        $d2 = explode('|',$row);
        $dates[]= [new DateTime($d2[0]),new DateTime($d2[1])];
    }
    $html = "<table><tr><th>Lp</th><th>data pocz.</th>"
    ."<th>data konc. </th><th>lata</th>,th>miesiące</th><th>dni</th></tr>";
    $lp=0;
    foreach($dates as $row){
        $lp++;
        $interwal = $row[0]->diff($row[1]);
        $miesiace = $interwal->y*12+$interwal->m;
    }
}