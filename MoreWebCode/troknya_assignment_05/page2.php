<?php
    session_start();
    
    echo "Class Title:  " . $_SESSION['class_title'] . "<br />";
    echo "Class Number:  " . $_SESSION['class_number'] . "<br />";

    echo '<a href="index.php">Index</a>' . " | " . '<a href="page3.php">Page 3</a>';
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