<?php
    $mainColor = "#FFF";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //echo $_POST['col'];
        $mainColor = $_POST['col'];
        setcookie('bg', $mainColor, time() + 86400, '/');
    }

    if(isset($_COOKIE['bg']))
    {
        $body = $_COOKIE['bg'];
    }
    else
    {
        $body = $mainColor;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?php echo $body; ?>">
    <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
        <div style="float:left"><input type="color" name="col"></div>
        <div style="float:left; margin-left:200px"><input type="submit" value="select Color"></div>


    </form>
</body>
</html>