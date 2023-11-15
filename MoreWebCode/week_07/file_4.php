<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>In php you can create user defined functions like what we have done in files 1 & 2.<br />
    PHP has built-in functions</p>

    <?php
        //$value is a placeholder
        function checkValues($value){
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
        }

        // call for each post
        checkValues($_POST['']);
    ?>
</body>
</html>

<script>alert("Hello World")</script>