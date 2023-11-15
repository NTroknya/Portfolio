<?php
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $conn = mysqli_connect($host_name, $user_name, $password);
    //check connection
    if(!$conn){
        die("failed to connect to server!!" . mysqli_connect_error());
    }else{}
    $q_db = "CREATE DATABASE IF NOT EXISTS noah_troknya";
    $r_db = mysqli_query($conn, $q_db);  
    //check db created
    if(!$r_db){
    }else{
        $conn = mysqli_connect($host_name, $user_name, $password, "noah_troknya");
    }
    $q_tbl = "CREATE TABLE IF NOT EXISTS blog (
            blogID INT(3) PRIMARY KEY AUTO_INCREMENT,
            rider_name VARCHAR(20) NOT NULL,
            age_group VARCHAR(20) NOT NULL,
            bike VARCHAR(20) NOT NULL,
            route_type VARCHAR(20) NOT NULL,
            accomodation VARCHAR(20) NOT NULL,
            region VARCHAR(20) NOT NULL,
            miles_per_day VARCHAR(20) NOT NULL,
            comments VARCHAR(999))";
    $r_tbl = mysqli_query($conn, $q_tbl);
    //check table created
    if(!$r_tbl){
    }else{}
?>