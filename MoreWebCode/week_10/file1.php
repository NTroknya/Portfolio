<?php
    $host = 'localhost';
    $user = 'root';
    // $user = 'rot';
    $password = '';
    $dbname = 'co_products';

    // $conn = mysqli_connect($host, $user, $password, $database);
    try{
        $dbc = new PDO("mysql:host = $host; dbname = $dbname;", $user, $password);
        echo "CONNECTED";
    }catch(PDOException $e){
        die("ERROR " . $e ->getMessage());
    }
    // $stat = "SELECT * FROM tbl_items";
    // $execute = ($conn;$stat);
    echo "Hello <br />";
    $stat = $dbc->query("SELECT * FROM tbl_items");
    while($row = $stat -> fetch())
    //while($row = $stat -> fetchAll())
    {
        echo $row['item'] . "   " . $row['type'] . "   " . $row['color'] . "<br />";
        echo"<pre>"; 
        print_r($row);
        echo"</pre>";
    }

    // fetch in associative and numeric array
    // 0 => 1
    // itemID => 1
    // 1 => men shoes
    // item => men shoes

    // fetchAll in associative and numeric array
    // fetchAll(PDO::FETCH_ASSOC)
    // fetchAll(PDO::FETCH_NUM)
    
    // if($dbc == true)
    // {
    //     echo "CONNECTED";
    // }

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