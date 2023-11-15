<?php
    $firstValue = $_POST['firstValue'];
    $secondValue = $_POST['secondValue'];
    $result = $_POST['result'];
    $operator = $_POST['operator'];
// Calculator done with switch statement

    switch($operator)
    {
        case 'Sum':
            $result = $firstValue + $secondValue;
            break;
        case 'Subtraction':
            $result = $firstValue - $secondValue;
            break;
        case 'Multiplication':
            $result = $firstValue * $secondValue;
            break;
        case 'Division':
            $result = $firstValue / $secondValue;
            break;
    }

// Calculator done with if/else statements
    /*
    if($operator === "Sum"){
        $result = $firstValue + $secondValue;
    }elseif ($operator === "Subtraction"){
        $result = $firstValue - $secondValue;
    }elseif ($operator === "Multiplication"){
        $result = $firstValue * $secondValue;
    }elseif ($operator === "Division"){
        $result = $firstValue / $secondValue;
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        main{
            width: 700px;
            padding: 11px;
            border: 1px solid #000;
            margin: 200px auto 0;
        }
        input[type="number"]{
            margin: 10px 0;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
    <form method="post" action="">
        <div><input type="number" class="form-control" required name="firstValue"   placeholder="Enter First Number"      
                value="<?php echo $firstValue?>"></div>
        <div><input type="number" class="form-control" required name="secondValue"  placeholder="Enter Second Number"     
                value="<?php echo $secondValue ?>"></div>
        <div><input type="number" readonly class="form-control" name="result"       placeholder="Result" 
                value="<?php echo $result ?>"></div>
        
        <div class="center">
            <input type="submit" name="operator" value="Sum"            class="btn btn-success">
            <input type="submit" name="operator" value="Subtraction"    class="btn btn-success">
            <input type="submit" name="operator" value="Multiplication" class="btn btn-success">
            <input type="submit" name="operator" value="Division"       class="btn btn-success">
        </div>
    </form>    
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>