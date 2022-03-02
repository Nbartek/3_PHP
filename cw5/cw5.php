<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kolory i php</h1>
    <?php
    include("function.php");//prubuje zaladowac skrypt functions i potem działa dalej
    echo getColors(["white","green","yellow","blue"]);
    ?>
    <script>
        window.onload=function(){
            document.querySelector("#colors").onchange = function(){
                document.body.style.backgroundColor = this.value;
            }
        }
    </script>
</body>
</html>