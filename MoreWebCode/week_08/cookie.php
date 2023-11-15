<?php
// cookie must be at the top...or before any output...
// You need cookie name
// optional cookie value
// optional experation time <based on unix clock or timing
// optional path '/', vs. '/content'
// optional secure ... https
// optional httponly

    setcookie('myFirstCookie', 'test', time() + 86400, '/');
    if($_COOKIE > 0)
    {
        echo "Cookies are on";
    }else
    {
        echo "Please turn-on ur cookies";
    }
    //C:\Users\tonka\AppData\Local\Google\Chrome\User Data\Default\Network
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