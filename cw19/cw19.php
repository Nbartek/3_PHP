<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-collapse:collapse;
        margin:30px;
        width:60%;
    }
    th,td{border:solid 1px black;padding: 4px}
    th{background-color:darkblue;color:lightblue}
    tr:nth-child(odd){background-color:lightgrey;}
    td{
        text-align:right;
    }
    </style>
</head>
<body>
    <?php
    require "functions.php";
    if(!file_exist("daty.txt")){
        dateToFile("daty.txt",-30,60,20);
    }
    echo dateToTable("daty.txt");
    ?>
</body>
</html>
