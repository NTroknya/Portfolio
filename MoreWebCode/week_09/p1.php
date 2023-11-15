<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    //creating connection
    $conn = mysqli_connect($host, $user, $pass);
    //check connection
    // if(!$conn){
    //     die("failed to connect to server!!" . mysqli_connect_error());
    // }else{
    //     echo "connection established!! :-)";
    // }

    $query = "CREATE DATABASE IF NOT EXISTS cs3800";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "database created!!";
    }else{
        echo "database failed!";
    }

    // $q = "DROP DATABASE IF EXISTS cs3800";
    // $drp = mysqli_query($conn, $q);
    // if($drp){
    //     echo "database deleted!!";
    // }else{
    //     echo "database still there!";
    // }




?>