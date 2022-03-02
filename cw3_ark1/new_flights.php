<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styl6.css" rel="stylesheet">
    <title>Nowe Odloty</title>
</head>

<body>
    <section id="main1">
        <?php require_once "conn.php" ?>
        <div id="conteiner">
            <form method="POST">
                <div> <select name="samolot" id="samolot">
                        <?php
                        $sql = "SELECT id,typ FROM `samoloty`";
                        $result = $conn->query($sql);
                        $planes = [];
                        while ($row = $result->fetch_array()) {
                            $planes[] = $row;
                        }
                        foreach ($planes as $row) {
                            echo "<option value=" . $row[0] . ">$row[1]</option>";
                        }
                        ?>
                    </select></div>
                <div> <input type="time" name="czas" id="czas"><label for="czas">Czas</label></div>
                <div> <input type="date" name="date" id="date"><label for="date">Czas</label></div>
                <div> <input type="text" name="nr_rejsu" id="nr_rejsu"><label for="nr_rejsu">Nr rejsu</label></div>
                <div> <input type="text" name="kierunek" id="kierunke"><label for="kierunek">Kierunek</label></div>
                <div> <input type="text" name="status" id="status"><label for="status">Status</label></div>

                <div id="line"><input type="submit" value="Zapisz"></label> </div>
            </form>
            <?php
            if (filter_has_var(INPUT_POST, "czas")) {
                $samolot = trim(filter_input(INPUT_POST, 'samolot'));
                $czas = trim(filter_input(INPUT_POST, 'czas', FILTER_SANITIZE_STRING));
                $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
                $nr_rejsu = trim(filter_input(INPUT_POST, 'nr_rejsu', FILTER_SANITIZE_STRING));
                $kierunek = trim(filter_input(INPUT_POST, 'kierunek', FILTER_SANITIZE_STRING));
                $status = trim(filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING));

                if ($samolot >= 1 && $samolot <= 4 && $nr_rejsu !== '' && strlen($kierunek) > 2 && $czas !== '' && $date !== '' && $status !== '') {
                    $sql = "INSERT INTO `odloty`( `samoloty_id`, `nr_rejsu`, `kierunek`, `czas`, `dzien`, `status_lotu`) 
            VALUES ('$samolot','$nr_rejsu','$kierunek','$czas','$date','$status');";
                    $result = $conn->query($sql);
                    header("Location: airport.php");
                } else {
                    echo "Nie wypełniłeś wszystkiego";
                }
            }

            ?>
    </section>
    <script src="validation.js" type="text/javascript"></script>
</body>

</html>