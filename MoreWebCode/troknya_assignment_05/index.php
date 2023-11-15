<?php
    session_start();
    
    $_SESSION['user_id'] = 'Noah Troknya';
    $_SESSION['class_title'] = 'Web Development II';
    $_SESSION['class_number'] = 'CS3800-01';
    $_SESSION['semester'] = 'Spring 2023';

    echo '<a href="page2.php">Page 2</a>' . " | " . '<a href="page3.php">Page 3</a>';
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