<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Użycie funkcji date()</h1>

    <?php
    $d = date("Y-m-d: h.i.s");//H-24godzinna,h-12godzinna / poćwicz https://www.php.net/manual/en/function.date.php i klasa dateTime
    $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
    $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
    $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
    var_dump($tomorrow);
    echo date("d-m-y",$tomorrow)."<br>";
    $now = strtotime("2002-12-03");
    echo date("Y-m-d",$now)."<br>";
    echo date("Y.m.d",mktime(0,0,0,12,31,2009));
    ?>
    <h1>Użycie klasy DateTime()</h1>
    <?php
    $di = new DateTime("2013-03-22");
    var_dump($di);
    echo $di->format("Y-m-d")."<br>";
    echo $di->getTimestamp()."<br>";
    ?>
</body>
</html>