<?php
    session_start();  // this will do 2 things... 1- it will start the session, 2- resume session
    $_SESSION['userId'] = '007';
    $_SESSION['Rank'] = 'James Bond';
    $_SESSION['FavCar'] = 'Astin Martin';

    echo '<a href="contact.php">Contact Us</a>' . " | " . '<a href="services.php">Services</a>';
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