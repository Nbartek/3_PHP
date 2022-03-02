<?php
const PATH = __DIR__.'/uploads';
var_dump($_POST);
if(filter_has_var(INPUT_POST,'obrazki')){
    echo "Usuwamy";
    foreach($_POST['obrazki'] as $toDelete){
        unlink(PATH.$toDelete);
    }
}
echo "<div><a href='galeria.php'>Przegląd obrazków</a></div>";