<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h1>Lista Użytkowników</h1>
    <?php
        $conn = new mysqli("localhost","root",null,"3tipg_ark2");
        $sql="SELECT id,imie,nazwisko FROM `uzytkownik`";
            $result = $conn->query($sql);
            $users = [];
            while($row =$result->fetch_array()){
                $users[] = $row;   
            }
            foreach($users as $row){
                echo("<a href='addOgloszenie.php?id=".$row[0]."'><h3>".$row[1]." ".$row[2]."</h3></a><a href='deleteUser.php?id=".$row[0]."'>Usuń użytkownika</a>");
            }
    
        mysqli_close($conn);
    ?>
</body>
</html>