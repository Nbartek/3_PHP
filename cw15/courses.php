<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw15.css">
    <title>Kursy do dołączenia</title>
</head>
<body>
    <div class="container">
    <h1>Kursy do dołączeni</h1>
    <nav>
    <ul>
    <li><a href="addStudent.php">Dodaj studneta</a></li>
    <li><a href="cw15.php">Obczaj studentów</a></li>
    <li><a href="addCourse.php">Dodaj kursy</a></li>
    </ul>
    </nav>
    <div>
    <?php
    require_once 'functions.php';
    $courses = getAllCourses();
    echo coursesToTable($courses);
    ?>
    </div>
    </div>
</body>
</html>