<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw15.css">
    <title>Lista Studentów</title>
</head>
<body>
    <div class="container">
    <h1>Lista Studentów</h1>
    <nav>
    <ul>
    <li><a href="courses.php">Zobacz kursy</a></li>
    </ul>
    <ul>
    <li><a href="addStudent.php">Dodaj studneta</a></li>
    </ul>
    </nav>
    <div>
    <?php
    require_once 'functions.php';
    $students = getAllStudents();
    echo studentsToTable($students);
    ?>
    </div>
    </div>
</body>
</html>