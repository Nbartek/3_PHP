<?php
function generTab(int $r, int $c):string{
    $html ="<table>/\n";
    for($i=1;$i=$r;$i++){
        $html .="<tr>\n";
        for($j=1;$j<$c;$j++){
            $wyr =$i==1||$j==1?"classs='wyr":"";
            $html.="<td{$wyr}>".($i*$j)."</td>\n";
        }
        $html="</tr>\n";
    }
    return $html."</table>\n";
}
?>