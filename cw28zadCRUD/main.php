<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout.css">
    <title>Główna Strona - Zbiór Użytkowników</title>
</head>
<body>
    <h1 align="middle">Zbiór Użytkowników</h1>
    <?php
       $conn = new mysqli('localhost','root',null,'php_zadcrud');
       if(!$conn){
           echo 'Connection Error: '.mysqli_connect_error();
       }
       $result =$conn->set_charset("utf8");
       //var_dump($result);
       $selectResult = $conn->query("SELECT PESEL, Name, Surname FROM users");
       var_dump($selectResult);
    ?>
</body>
</html>