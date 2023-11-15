<?php
    $firstValue = $_POST['firstInt'];
    $secondValue = $_POST['secInt'];
    $thirdValue = $_POST['thirdInt'];
    function productByRef(&$num1, &$num2, &$num3){
            $num1 *=2;
            $num2 *=3;
            $num3 *=4;
            echo "After pass by reference num1 = " . $num1 . "<br />";
            echo "After pass by reference num2 = " . $num2 . "<br />";
            echo "After pass by reference num3 = " . $num3 . "<br />";
        }
    function productByVal($num1, $num2, $num3){
        $num1 *=5;
        $num2 *=10;
        $num3 *=15;
        echo "After pass by value num1 = " . $num1 . "<br />";
        echo "After pass by value num2 = " . $num2 . "<br />";
        echo "After pass by value num3 = " . $num3 . "<br />";
    }
    echo "Original values of first, second, and third Integers: <br />";
    echo $firstValue . "<br />";
    echo $secondValue . "<br />";
    echo $thirdValue . "<br />";
    productbyRef($firstValue, $secondValue, $thirdValue);
    echo "After first function, first second and third values are: <br />";
    echo $firstValue . "<br />";
    echo $secondValue . "<br />";
    echo $thirdValue . "<br />";
    productByVal($firstValue, $secondValue, $thirdValue);
    echo "After second function, first second and third values are: <br />";
    echo $firstValue . "<br />";
    echo $secondValue . "<br />";
    echo $thirdValue . "<br />";

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
        <h3>Input 3 integers</h3>
        <input type="number" name="firstInt">
        <input type="number" name="secInt">
        <input type="number" name="thirdInt">
        <input type="submit" value="Submit">
    </form>
</body>
</html>