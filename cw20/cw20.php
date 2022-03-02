<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Person{
            //fields- właściwości
            private string $firstName="Tomasz";
            private string $lastName="Freetrinal";
            private int $age=34;

            //methods - zachowanie obiektu
            public function setFirstName(string $firstName): void
            {
                $this->firstName = $firstName;
            }
            public function getFirstName(): string
            {
                return $this->firstName;
            }
            public function getLastName():string
            {
                return $this->lastName;
            }
            public function setLastName(string $lastName)
            {
                $this->lastName = $lastName;
            }
            public function getAge():int
            {
                return $this->age;
            }
    
            public function setAge(int $age):void
            {
                $this->age = $age > 0 ? $age : -$age;
            }
            public function __construct(string $firstName="Adam", 
            string $lastName = "Głowacki",int $age = 25)
      {
          $this->setFirstName($firstName);
          $this->setLastName($lastName);
          $this->setAge($age);
      }
        };
        function getOlder(array $people):string{
            $max = -PHP_INT_MAX;
            $reslut = null;
            foreach($people as $p){
                if($p->getAge()>$max){
                    $result = $p;
                    $max = $p->getAge();
                }
                
            }
            return $result;
        }
        function diffAge(Person $p1,Person $p2):int{
            return  abs($p1->getAge()-$p2->getAge());
        }
        $people=[
            new Person("Adam","Kowalski",23),
            new Person("Radek","Kowalski",41),
            new Person("Botman","Kowalski",12),
            new Person("Mama","Kowalski",56),
            new Person("Grzegorz","Kowalski",2)
        ];
        //usżywanie klasy Person do towrzenia obiektów
        $p1 = new Person();
        $p1 ->setFirstName("Alojzy");
        var_dump($p1);
        echo "<p>Imię: {$p1->getFirstName()}</p>";
        $older = getOlder($people);
        echo "<ul>\n";
        if($older != null){
          echo "<div>Nastarsza osoba to: ($older)</div>";  
        }else{
            echo "Błąd";
        }
        echo "<h3>Roznica wieku miedzy ($p1) i ($p2) wynosi ".diffAge($p1,$p2)."</h3>"
    ?>

</body>
</html>