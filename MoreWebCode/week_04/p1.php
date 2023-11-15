<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ol>
        <li>while</li>
        <li>do-while</li>
        <li>for</li>
        <li>foreach</li>
    </ol>
    <p>
        while syntax:
        <pre>
            condition initialization/declaration
            while(condition)
            {
                statements
                condition update
            }
        </pre>
    </p>
    <p>
        do-while syntax:
        <pre>
            condition initialization/declaration
            do
            {
                statements
                condition update
            }while(condition);
        </pre>
    </p>
    <p>
        for loop
        <pre>
            for (initialization ; condition ; update)
            {
                statements
            }
        </pre>
    </p>
    <p>
        foreach loop
        <pre>
            $array = array('value1', 'value2', ...);
            foreach ($array as $newarray)
            {
                statements
            }
        </pre>
    </p>
    <p>
        switch syntax
        <pre>
            See p2
        </pre>
    </p>
    <h3>While Example</h3>
    <?php
        $i = 0;
        while($i < 3)
        {
            echo "Hello World!" . "<br />";
            $i++;
        }
    ?>
    <h3>Do-While Example</h3>
    <?php
        $j = 0;
        do
        {
            echo "<p>Hello " . ($j+1) . "time</p>";
            $j++;
        }while($j <= 5);
    ?>
    <h3>For Loop Example</h3>
    <ol>
    <?php
        for($k = 0;$k <= 3;$k++)
        {
            echo "<li>I love this class</li>";
        }
    ?>
    </ol>
    <h3>foreach Example</h3>
    <ul>
    <?php
        $fruits = array('Banana', 'Apples', 'Oranges');
        foreach($fruits as $newfruits)
        {
            echo "<li>$newfruits</li>";
        }
    ?>
    </ul>
    <h3>foreach using a for Example</h3>
    <ul>
    <?php
        $fruits = array('Banana', 'Apples', 'Oranges');
        for($index = 0; $index < 3; $index++)
        {
            echo "<li>$fruits[$index]</li>";
        }
    ?>
    </ul>
    <h3>foreach using an associative array Example</h3>
    <?php
        $authors = array(
                            "Author"  =>  "Steve Johnson", 
                            "Title"   =>  "Brain on ASP.Net",
                            "Email"   =>  "sjohnson@gmail.com"
                        );

        foreach($authors as $key => $value)
        {
            echo $key . " : " . $value . "<br />";
        }
    ?>
</body>
</html>