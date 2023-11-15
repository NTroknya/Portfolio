<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cs3800";
    //creating connection
    $conn = mysqli_connect($host, $user, $pass, $db);
    //check connection
    if(!$conn){
        die("failed to connect to server!!" . mysqli_connect_error());
    }else{
        echo "connection established!! :-)";
    }
    $query = "CREATE DATABASE IF NOT EXISTS $db";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "database created!!";
    }else{
        echo "database failed!";
    }
    
    $tbl = "CREATE TABLE IF NOT EXISTS csStudents
    (
        stuid INT(6) PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(255),
        last_name VARCHAR(255),
        email VARCHAR(55) UNIQUE
    )";

    $tblQ = mysqli_query($conn, $tbl);
    if($tblQ){
        echo "table created!!";
    }else{
        echo "table failed!";
    }

    // $insert = "INSERT INTO csStudents
    //             (first_name, last_name, email)
    //             VALUES('A-A-Ron', 'Troknya', 'dummy2@email.com')
    // ";

    // $insq = mysqli_query($conn, $insert);
    // if($insq){
    //     echo "data inserted!!";
    // }else{
    //     echo "data failed to insert!";
    // }

    $display = "SELECT * FROM csStudents";
    $run = mysqli_query($conn, $display);
    $cktable = mysqli_num_rows($run);
    if($cktable > 0){
        echo "<table>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                </tr>"; 
        while($row = mysqli_fetch_assoc($run)){
            echo "<tr>"; 
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
<html>
    <head>
        <style>
            table{
                border:1px solid #000;
                border-collapse: collapse;
                width:400px;
            }
            td,th{
                border:1px solid #000;
            }
        </style>
    </head>
</html>