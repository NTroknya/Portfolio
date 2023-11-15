<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Function with default parameter ($name = "flag")</h3>
    <?php
        function sayHello($name = "admin"){
            echo '<br /> Hello ' . $name;
        }
        // no value passed
        sayHello();
        // value passed
        sayHello('Noah');
    ?>

    <h3>Function with variable parameter list</h3>
    <?php
        function add(){
            $numbers = func_get_args(); // acts like an array
            $total = 0; // initializing $total
            foreach($numbers as $number){
                $total += $number;
            }//end of foreach
            return $total;
        }
        $sum = add(5, 16, 22);
        echo "The sum of the 3 numbers are: $sum";
    ?>
</body>
</html>