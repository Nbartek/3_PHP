<?php
require_once "item.php";
require_once "configuration.php";
class FileRepo{
    private array $items = [];
    private string $pathToFile = DIR.'/'.ITEM_FILE;

    public function __construct(array& $items=[])
    {
        if(file_exists($this->pathToFile)){
            $this->items = $this->getFromFile();
        }else{
            $this->items->$items;
        }
    }
    function saveItem(Item & $item):bool{
        $f = fopen(DIR.'/'.ITEM_FILE, 'a');
        if(!$f) return false;
        fwrite($f,$item->toJSON().PHP_EOL);
        fclose($f);
        return true;
    }
    public function getFakeItems():array{
        return[new Item("Element1"),new Item("element 2"),new Item("Nowy element"),new Item()];
    }
    public function getFromFile(string $filleName=ITEM_FILE):array{
        $lines = file(DIR.'/'.$filleName,FILE_IGNORE_NEW_LINES);
       // var_dump($lines);

       foreach($lines as $line){
                  Item::fromJSON($lines[$line]);
       }

        return [];
    }
public function getItems(){
    return $this->items;
}
}