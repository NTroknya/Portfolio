<?php
    session_start();
    echo "Hello " . $_SESSION['userId'] . '<br />';
    echo "You are now the " . $_SESSION['Rank'] . ' of our company<br />';
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
    <h3>You are in the contact page</h3>
</body>
</html>