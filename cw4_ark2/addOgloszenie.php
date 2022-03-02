<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form method="POST">
                <div> </div>
                <div> <label for="tytul">Tytuł:</label><input type="text" name="tytul" id="tytul">  </div>
                <div> <label for="tresc">Treść: </label>  <input type="text" name="tresc" id="tresc">  </div>
                <div> <label for="tresc">Podkategoria: </label>  <input type="number" name="podkategoria" id="podkategoria">  </div>
                <div> <label for="tresc">Kategoria: </label>  <input type="number" name="kategoria" id="kategoria">  </div>
                <div id="line"><input type="submit" value="Zapisz"></label> </div>
            </form>
            <?php
            $conn = new mysqli("localhost","root",null,"3tipg_ark2");
                            if (filter_has_var(INPUT_POST, "tytul")) {
                                $title = trim(filter_input(INPUT_POST, 'tytul'), FILTER_SANITIZE_STRING);
                                $tresc = trim(filter_input(INPUT_POST, 'tresc', FILTER_SANITIZE_STRING));
                                $podkategoria = trim(filter_input(INPUT_POST, 'podkategoria', FILTER_SANITIZE_NUMBER_INT));
                                $kategoria = trim(filter_input(INPUT_POST, 'kategoria', FILTER_SANITIZE_NUMBER_INT));
                                $user = intval($_GET['id']);
                                var_dump($user);
                                if ($title !== '' && $tresc !== '' && $podkategoria !== ''&& $kategoria !== '') {
                                    $sql = "INSERT INTO `ogloszenie`( `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES ('$user','$kategoria','$podkategoria','$title','$tresc');";
                                    $result = $conn->query($sql);
                                    header("Location: ogloszenia.php");
                                } else {
                                    echo "Nie wypełniłeś wszystkiego";
                                }
                            }
                
            ?>
</body>
</html>