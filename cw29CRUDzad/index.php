<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php require_once "process.php";
    $result = getConnection()->query("SELECT * FROM users") or die(getConnection()->error);
    $result->fetch_assoc();

    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <table id="table">
                <tr>
                    <th>Lp</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Telefon</th>
                    <th>Data Urodzenia</th>
                    <th colspan="2"></th>
                </tr>
                <?PHP
                $lp = 0;
                while ($row = $result->fetch_assoc()) {
                    $lp++;
                    //$html = "<tr><td>{$lp }</td><td>{$row['name'] }</td><td>{$row['surname'] }</td><td>{$row['phone'] }</td><td>{$row['birthdate'] }</td></tr>";
                ?>
                    <tr>
                        <td><?php echo $lp ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Surname'] ?></td>
                        <td><?php echo $row['Phone'] ?></td>
                        <td><?php echo $row['Birthdate'] ?></td>
                        <td><a href="index.php?edit=<?php echo $row['id']; ?>" class=" btn btn-info">Edytuj</td>
                        <td><a href="index.php?delete=<?php echo $row['id']; ?>" class=" btn btn-danger">Usuń</td>
                    </tr>
                <?php } ?>
            </table>
        </div>


        <form class="form" method="post" action="index.php">
            <div class="form-group mt-3">
                <label for="imie">Imię: </label>
                <input type="text" name="imie" id="imie" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $imie; ?>">

            </div>
            <div class="form-group mt-3">
                <label for="nazwisko">Nazwisko</label>
                <input type="text" name="nazwisko" id="nazwisko" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $nazwisko; ?>">

            </div>
            <div class="form-group mt-3">
                <label for="telefon">Telefon</label>
                <input type="text" name="telefon" id="telefon" class="form-control" placeholder="" aria-describedby="helpId"  value="<?php echo $telefon; ?>">

            </div>
            <div class="form-group mt-3">
                <label for="urodziny">Data urodzenia</label>
                <input type="date" name="urodziny" id="urodziny" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $urodziny; ?>">

            </div>
            <div class="form-group mt-3">

                <button type="submit" class="btn btn-primary" name="save" id="save" onclick="mafunkcja()">Zapisz</button>

            </div>
            <script src="validation.js"></script>
</body>

</html>