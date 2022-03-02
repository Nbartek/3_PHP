<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table{border-collapse: collapse;width:60%;}
th{background-color: salmon;}
td,th{border: solid 1px lightseagreen;padding:8px;}
tr:nth-child(even){background-color:lightskyblue;}
</style>
<body>
<?php
require "functions.php";
$dane =getFromDb();
echo toTable($dane);
$colors = getAsscocArray();
echo "<h3>{$colors['yellow']}</h3>\n";
print_r(array_keys($colors));echo"<br>";
print_r(array_values($colors));
var_dump($colors);
echo colorsToSelect($colors);
?>
<script>
window.addEventListener("load",()=>{
    document.querySelector("#colors").addEventListener("change",function(){
        console.log(this);
        document.body.style.backgroundColor = this.value;
    });
});
</script>
</body>
</html>