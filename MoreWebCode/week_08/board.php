<?php
    session_start();
    echo "Hello " . $_SESSION['userId'] . '<br />';
    echo "You are now the " . $_SESSION['Rank'] . ' of our company<br />';
    echo "Your car is a(n) " . $_SESSION['FavCar'] . ' provided by our company<br />';
    echo "You are now the top " . $_SESSION['FavFruit'] . ' of our company<br />';
    $_SESSION['FavCar'] = "Honda Civic";

    echo '<a href="last.php">Last Page</a>';

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