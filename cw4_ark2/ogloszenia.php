<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Portal ogłoszeniowy</title>
</head>
<body>
    <section id="baner">
        <h1>Portal ogłoszeniowy</h1>
    </section>
    <section id="right_plate">
    <h2>Ogłoszenia kategorii książki</h2>
    <?php
    $conn = new mysqli("localhost","root",null,"3tipg_ark2");
    $sql1="SELECT id,tytul,tresc FROM `ogloszenie` WHERE kategoria = 1";
        $result = $conn->query($sql1);
        $books = [];
        $phones=[];
        while($row =$result->fetch_array()){
            $books[] = $row;

            
        }
        

        foreach($books as $row){
            echo("<h3>".$row[0]." ".$row[1]."</h3>");
            echo("<p>".$row[2]."</p>");
            $int_value = intval(($row[0]));
        $sql2="SELECT uz.telefon FROM `ogloszenie` as og INNER JOIN 
        uzytkownik as uz on uz.id = og.uzytkownik_id  WHERE og.id =$int_value";
        //var_dump($row[0]);
        $result1 = $conn->query($sql2);
           // var_dump($result1->fetch_row());
            echo("<p>"."telefon kontaktowy: ".$result1->fetch_row()[0]."</p>");
        }

    mysqli_close($conn);
    ?>
    </section>
    <section id="left_plate">
        <h2>Kategorie ogłoszeń</h2>
                <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="ksiazki.jpg" alt="Kupię/sprzedam ksiązkę">
        <table>
            <tr>
                <th>Liczba ogłoszeń</th>
                <th>Cena ogłoszenia</th>
                <th>Banus</th>
            </tr>
            <tr>
                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan=3>Subskrybcja newslettera <br> to upust 0,20 PLN na <br> ogłoszenie</td>
            </tr>
            <tr>
                <td>11 - 50</td>
                <td> 0,80 PLN</td>
            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0,60 PLN</td>
            </tr>
        </table>
         <a href="users.php">Lista Użytkowników</a>   
    </section>
    <section id="stamp">
    <p>portal ogłoszeniowy opracował: PESEL</p>

    </section>
</body>
</html>