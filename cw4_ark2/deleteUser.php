<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuń</title>
</head>
<body>
    <h1>Czy na pewno chcesz usunąc użytkownika:</h1>
    <form  method="post">
            <input type="radio" id="age1" name="age" value="Yes">
    <label for="age1">Tak</label><br>
    <input type="radio" id="age2" name="age" value="No" checked>
    <label for="age2">Nie</label><br> 
    <div id="line"><input type="submit" value="Zapisz"></label> </div>
    </form>


    <?php
    $conn = new mysqli("localhost","root",null,"3tipg_ark2");

    if (isset($_POST['age'])) {
        $title = $_POST['age'];
        $user = intval($_GET['id']);
        //var_dump($title);
        if($title == "No"){
            header("Location: ogloszenia.php");
        }else{
            $sql = "DELETE FROM `uzytkownik` WHERE id =".$user;
            $sql2 ="DELETE from ogloszenie where uzytkownik_id =".$user;
            $sql3 ="SELECT * FROM `ogloszenie` WHERE uzytkownik_id = ".$user;
            $result2 = $conn->query($sql3);
            //var_dump(mysqli_num_rows($result2));
            if(mysqli_num_rows($result2)!=0){
                $result3 = $conn->query($sql2);
            }
            $result = $conn->query($sql);
            
            
            header("Location: ogloszenia.php");
        }
    }

    ?>
</body>
</html>