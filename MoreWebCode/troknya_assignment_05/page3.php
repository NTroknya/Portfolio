<?php
    session_start();
    
    echo "Name:  " . $_SESSION['user_id'] . "<br />";
    echo "Class Title:  " . $_SESSION['class_title'] . "<br />";
    echo "Class Number:  " . $_SESSION['class_number'] . "<br />";
    echo "Semester:  " . $_SESSION['semester'] . "<br />";

    $_SESSION['class_title'] = 'Intro to Quantum Computing';
    $_SESSION['class_number'] = 'CS4900-90';

    echo '<a href="index.php">Index</a>' . " | " . '<a href="page2.php">Page 2</a>' . " | " . '<a href="page4.php">Page 4</a>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>