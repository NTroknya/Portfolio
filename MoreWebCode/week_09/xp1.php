<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "xmydb";
    //creating connection:   @ suppresses error
    $conn = @mysqli_connect($host, $user, $pass, $db);
    //check connection
    if(!$conn){
        die("failed to connect to database!!" . mysqli_connect_error());
    }else{
        echo "database connection established!! :-)";
    }




?>