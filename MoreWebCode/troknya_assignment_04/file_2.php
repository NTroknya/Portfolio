<?php
    function checkValues($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
    }
    foreach($_POST as $str){
        checkValues($str);
        echo $str . "<br />";
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
<body>
    <form action="" method="post">
        <h3>Input 3 strings</h3>
        <input type="text" name="str1">
        <input type="text" name="str2">
        <input type="text" name="str3">
        <input type="submit">
    </form>    
</body>
</html>