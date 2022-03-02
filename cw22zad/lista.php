<?php
require_once "configuration.php";
require_once "uczen.php";
$filecount = 0;
$files2 = glob(DIR . "/" . "*");
if ($files2) {
    $filecount = count($files2);
}
//echo $filecount . " files ";

$files = glob(DIR . "/" . "*");
foreach ($files as $file) {
    echo basename($file) . "\n";
    $handle = fopen("$file", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $uczen = new Student(trim($_POST['name']),trim($_POST['nazw']),strval($_POST['grups']));
        }
        fclose($handle);
    } else {
        // error opening the file.
    }
}
