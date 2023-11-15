<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Functions in PHP</h1>
    <h3>Functions are:</h3>
    <ul>
        <li>A block of statements that can be revised {}</li>
        <li>Will <b>NOT</b> execute immediately when page loads</li>
        <li><b>WILL</b> execute by a call statement to the function</li>
        <li>Have parameters so you can pass information to it usingrguments ($num1 = 'ur name')</li>        
    </ul>
    <h3>Rules for creating functions in PHP:</h3>
    <ul>
        <li>Name must begin with a letter or underscore ... 1function1, function1, or _myFunction</li>
        <li>Name can contain letters, numbers, and underscore. add_one, add_one-111</li>
        <li>Function names in PHP are <b>not</b> case sensitive. add_1, Add_1, ADD_1 all the same function</li>
        <li>Variables <b>are</b> case sensitive</li>
        <li><b>NO DUPLICATE FUNCTION NAMES!!!!</b></li>
    </ul>
    <h3>How to create a function in PHP</h3>
    <ol>
        <li>Start with keyword 'function'</li>
        <li>add function name</li>
        <li>add fucntion parameters</li>
        <li>add block -- {}</li>
        <li>outside the function block, create call to the function</li>
    </ol>
    <?php
        // non-value return function
        // function without argument
        function write_1(){
            // statements
            echo 'Hello class of 2023';
        }
        write_1(); // call to function write_1()
    ?>
    <?php
        // non-value return function
        // function with argument
        function write_2($name){
            // statements
            echo "<br />Hello: $name";
        }
        write_1(); // call to function write_1()
        write_2('Noah'); // call to function write_2()
    ?>
    <?php
        // value-return function
        // function with argument
        //       placeholders V
        function sum($num1, $num2){
            // statements
           $total = ($num1 + $num2);
           return $total;
        }
        $total = sum(10, 20);// call to function sum()
        echo "<br />number 1 + number 2 = " . $total;
    ?>
    <h3>Function in PHP can be passed by value or reference</h3>
    <ul>
        <li>Function argument in php by default passed by value</li>
        <li>Function in php can be passed by reference</li>
    </ul>
    <?php
        // pass by reference
        $num1 = 10;
        echo "Original value of num1/num2: " . $num1 . "<br />";
        function product2(&$num1){
            $num1 *=2;
            echo "<br />pass by reference num1";
            echo "<br /> the value of num1 inside the function product2: " . $num1 . "<br />";
        }

        product2($num1);
        echo "the value of num1 outside the function product2: " . $num1 . "<br />";
    ?>
    <?php
        // pass by value
        $num2 = 10;
        function product3($num2){
            $num2 +=20;
            echo "<br />pass by value num2";
            echo "<br /> the value of num2 inside the function product3: " . $num2 . "<br />";
        }

        product3($num2);
        echo "the value of num2 outside the function product3:" . $num2 . "<br />";
    ?>
</body>
</html>