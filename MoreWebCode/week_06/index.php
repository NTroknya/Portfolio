<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Arrays in PHP</h3>
    <ul>
        <li>Datatype contains several items (elements) that store values <br />
        However, arrays in PHP can be mixed data </li>
        <li>Elements or items can be accessed by index or key</li>
        <li>The length of the array is the number of elements or items</li>
    </ul>
    <h3>Types of arrays in PHP</h3>
        <ol>
            <li>Indexed -- arrays with numeric index</li>
            <li>Associative -- array with key value pair</li>
            <li>Multidimensional -- array which will contain one or more array</li>
        </ol>
    <h3>Important built-in arrays function in php</h3>
    <ol>
        <li>count($array_name) -- return the length of the array</li>
        <li>print_r($array_name) -- display array content</li>
        <li>var_dump($array_name) -- display array content</li>
        <li>for loop ( ; ; )  -- display array, only used to display indexed arrays</li>
        <li>foreach loop -- display array, indexed, or key, value, or key - value</li>
        <li>array_merge -- combine 2 arrays into new array</li>
        <li>array_push -- adds new value to the array</li>
    </ol>

    <?php
        $list1 = ['Steve', 'Kate', 'Malik', 'Sumayyah'];
        $list2 = array('Zeno', 'Sami', 'Zakaia');
        // echo $list1[0];
        // echo '<br />';
        // echo $list1[1];
        // echo '<br />';
        // echo $list1[2];
        // echo '<br />';
        // echo $list1[3];
        //echo '<pre>';
        //print_r($list2);
        //var_dump($list1);
        //echo '</pre>';
        $list3 = array('Steve', 45, 'male', 90525.69);
        //echo '<pre>';
        //print_r($list3);
        //var_dump($list3);
        //echo '</pre>';
        $list4 = array_merge($list1, $list2);
        // echo '<pre>';
        // print_r($list4);
        // echo '</pre>';
        // echo count($list4);
        $list4[] = 'Amel';
        array_push($list4, 'Aida');
        // echo '<pre>';
        // print_r($list4);
        // echo '</pre>';
        // for($i = 0; $i < count($list4); $i++){
        //     // echo $list4[$i] . "<br />";

        //     echo "{$list4[$i]} <br />";
        // }
        // echo "<ol>";
        //     foreach($list4 as $newArray){
        //         echo "<li>" . $newArray . "</li>";
        //     }
        // echo "</ol>";
        //          key            value
        $books1 = ['Title'     => 'PHP @ WSU',
                  'Published'  =>  2012,
                  'Author'     => 'David Miller',
                  'Age'        => '28'
                 ];
        $newList = array(
                            'Apples'  => 'red',
                            'Oranges' => 'yellow',
                            'Banana'  => 'green'
                        );
        // echo '<pre>';
        // print_r($books1);
        // echo '</pre>';
        $books1['E-Mail'] = 'mynewbook@gmail.com';
        // echo '<pre>';
        // print_r($books1);
        // echo '</pre>';
        // echo "<ol>";
        // foreach($books1 as $key => $value)
        // {
        //     echo "<li>" . $key . "   " . $value . "</li>";
        // }
        // echo "</ol>";
        // echo "<ol>";
        // foreach($newList as $key => $value)
        // {
        //     echo "<li>" . $key . "   " . $value . "</li>";
        // }
        // echo "</ol>";
        // this is a c/c++ style
        $list101=[
                    ['Sumayyah', 29, 'sum@gmail.com'],
                    ['Malik'   , 19, 'malik@gmail.com'],
                    ['Zeno'    , 14, 'zozo@gmail.com']
                 ];
        // this is a php style
        $list102 = array(
                            array('CS3800', 'Web using PHP'),
                            array('CS2800', 'HTML & CSS'),
                            array('CS3200', 'Computational Theory')
                        );
        // echo '<pre>';
        // print_r($list101);
        // echo '</pre>';
        echo '<pre>';
        print_r($list102[0][1]);
        echo '</pre>';
    ?>

<p></p>
</body>
</html>