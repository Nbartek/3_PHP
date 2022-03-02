<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicasteczka</title>
</head>
<body>
    <?php
    var_dump($_COOKIE);
    $c_name = "Biskrzopt";
    $c_value = "smkaczne";
    setcookie($c_name,$c_value,time()+3600,"/");
    if(isset($_COOKIE[$c_name])){
        echo "<p>Ciasteczko: {$c_name} ma wartość: {$_COOKIE[$c_name]}</p>";
    }else{
        echo "<p>Brak ciasteczka: {$_name}</p>";
    };
    
    ?>
    
</body>
</html>