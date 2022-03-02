<?php
function getColors(array $colors):string{
    $html ="<select id='colors'>\n";
    foreach($colors as $color){
        $html .="<option value='{$color}'>{$color}</option>\n";
    }
    $html .="</select>\n";
    return $html;
}