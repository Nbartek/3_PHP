
<?php
class Item{
    //public static  int $counter=0;
    public int $itemId;
    public string $name;
    public function __construct(string $name="noname",int $id = -1)
    {
       //$this->itemId = ++self::$counter;
       $this->itemId =$id=== -1 ? ++self:$id;
       $this->name = $name;
    }
    public function toJSON():string
    {
        return json_encode($this);
    }
    public function fromJSON(string $json): ?Item {
        $data = json_decode($json);

        return new Item();
    }
}
