<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Document{
        protected string $name;
        protected int $size;
        public function __construct(string $name= "Noname", int $size=0){
            $this -> name = $name;
            $this-> size = $size;
        }
        public function __toString():string{
            return "Dokument o nazwie: {$this->name} i rozmiarze: {$this->size}";
        }
    }
    class DocText extends Document{
        private array $lines = [];
        public function __construct(array $lines =[],string $name="Noname", int $size=0){
            parent::__construct($name,$size);
            $this->lines = $lines;
        }
        public function __toString(): string
        {
            $result = parent::__toString();
            $result .= "Zawartosc dokumentu: <br>";
            foreach($this->lines as $line){
                $result .=$line."<br>\n";

            }
            return $result;
        }
    }
    class DocImage extends Document{
        private int $width;
        private int $height;
        public function __construct(int $width, int $height,string $name="Noname", int $size=0){
            parent::__construct($name,$size);
            $this->height = $height;
            $this->width = $width;
        }
        public function __toString(): string
        {
            $result = parent::__toString();
            $result .="<br> Wysokość: ".$this->height." i Szerokość: ".$this->width;
            return $result;
        }
    }
    $d = new DocText(["gfnghmjgf","rrrrrrrr",",kgjkfvhc","lknjbh nbfcgvbnhgfc "]);
    $i = new DocImage(131,133,'qwerty', 12);
    //var_dump($d);
    //echo $d;
    var_dump($i);
    echo $i;

?>
</body>
</html>