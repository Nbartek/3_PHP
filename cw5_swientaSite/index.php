<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona Świąteczna</title>
  <link rel="stylesheet" href="swienta.css">
</head>

<body>

  <!-- ----------------------------Menu boczne-------------------------------- -->
  <aside class="snow">
    <ul class="asideList">
      <li><a href="addPresent.php" class="asideAnchor">Dodaj Prezent</a></li>
      <li><a href="addKid.php" class="asideAnchor">Dodaj dziecko</a></li>
    </ul>
  </aside>

  <!-- ----------------------------Sekcja strony głównej-------------------------------- -->
  <section>

    <!-- -------------Ikonka Menu bocznego--------------- -->
    <input type="checkbox" id="myInput">
    <label for="myInput">
      <span class="bar top"></span>
      <span class="bar middle"></span>
      <span class="bar bottom"></span>
    </label>

    <!-- -------------Strona Główna--------------- -->
    <div class="content">
      <div class="snow"></div>
      <h1 id="titletimer">Świeta odbędą się za: <div id="timer"> </div></h1>
      

      <h1>Zbiór Grzecznych dzieci</h1>

      <?php
      require_once "conn.php";
      require_once "functions.php";
      $conn = getConnection();
      if (!$conn) {
        echo 'Connection Error: ' . mysqli_connect_error();
      }
      $sql = "SELECT dzieci.Imie,dzieci.Nazwisko, prezenty.Nazwa FROM `dzieci` inner join prezenty on dzieci.id_prezentu = prezenty.id where dzieci.CzyGrzeczny = 1";
      //$result = $conn->query($sql);
      $getAll = getAll($sql);
      //var_dump(gettype($getAll));
      echo (daneToTable($getAll));
      ?>
      <div id="snowBTN"></div>
    </div>
  </section>



  <script src="swienta.js"></script>
</body>

</html>