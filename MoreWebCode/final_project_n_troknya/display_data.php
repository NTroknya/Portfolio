<?php
    include 'connection_logic.php';
    function checkValues($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
    }
    checkValues($_POST['r_name']);
    $rName = $_POST['r_name'];
    $ageGroup = $_POST['age_group'];
    $bikeType = $_POST['bike_type'];
    $routeType = $_POST['route_type'];
    $accomType = $_POST['accom_type'];
    $region = $_POST['region'];
    $milesPerDay = $_POST['miles_per_day'];
    checkValues($_POST['comment']);
    $comment = $_POST['comment'];
    $q_ins = "INSERT INTO blog
            (rider_name, age_group, bike, route_type, accomodation, region, miles_per_day, comments)
            VALUES('$rName', '$ageGroup', '$bikeType', '$routeType', '$accomType', '$region', '$milesPerDay', '$comment')";
    $r_ins = mysqli_query($conn, $q_ins);
    $sql = "SELECT * FROM blog";
    $q_sel = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($q_sel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayton CycloCrossings</title>
</head>
<body>
    <h1>Dayton CycloCrossings</h1>
    <h2>My Membership Information</h2>
    <table>
        <tr>
            <td class=key>Rider Name</td>
            <td class=value><?php echo $row[1]; ?></td>
        </tr>
        <tr>
            <td class=key>Age Group</td>
            <td class=value><?php echo $row[2]; ?></td>
        </tr>
        <tr>
            <td class=key>Bike Type</td>
            <td class=value><?php echo $row[3]; ?></td>
        </tr>
        <tr>
            <td class=key>Route Type</td>
            <td class=value><?php echo $row[4]; ?></td>
        </tr>
        <tr>
            <td class=key>Accomodation</td>
            <td class=value><?php echo $row[5]; ?></td>
        </tr>
        <tr>
            <td class=key>Region</td>
            <td class=value><?php echo $row[6]; ?></td>
        </tr>
        <tr>
            <td class=key>Mile Per Day</td>
            <td class=value><?php echo $row[7]; ?></td>
        </tr>
        <tr>
            <td class=key>Comments</td>
            <td class=value><?php echo $row[8]; ?></td>
        </tr>
    </table>    
</body>
</html>