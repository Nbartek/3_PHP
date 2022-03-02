<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="cw14.css">
    <title>Document</title>
</head>
<body>
    <h1>Dodawanie nowego rekordu</h1>
    <div class="container">
        <form class="form" method="post" action="addNew.php">
            <div class="form-group mt-3">
              <label for="imie">Imię: </label>
              <input type="text" name="imie" id="imie" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group mt-3">
              <label for="nazwisko">Nazwisko</label>
              <input type="text" name="nazwisko" id="nazwisko" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group mt-3">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group mt-3">
              
              <input type="submit" class="btn btn-dark" value="Zapisz" >
              
            </div>
            
        </form>
        <?php
require_once "functions.php";
var_dump($_POST);
if(filter_has_var(INPUT_POST,'imie')){   //if(isset($_POST['....']))
   $imie = trim(filter_input(INPUT_POST,'imie',FILTER_SANITIZE_STRING));
   $nazwisko = trim(filter_input(INPUT_POST,'nazwisko',FILTER_SANITIZE_STRING));
   $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
   //$email = filter_var(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
     var_dump($email);      
   if($imie!='' && $nazwisko!='' && $email){
       $result = insertNew([$imie,$nazwisko,$email]);
   }
   header("Location: main.php");
}else {
    header("Location: main.php");
}
        ?>
    </div>
</body>
</html>