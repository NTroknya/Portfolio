<?php
// creating databases using PDO

$host='localhost';
$user='root';
$password='';
$db='blogDB';
$db2='blogDB2';
$db3='cs_at_wsu';
try{
$dbc = new PDO("mysql:host = $host", $user, $password);

// if($dbc){
//     echo "CONNECTED";
// }

$dbc -> exec("CREATE DATABASE $db3;");
    //or die(print_r($dbc -> errorInfo(), true));
    //not friendly error message^
}
catch(PDOException $e){
    //friendly error message
    die("Error " . $e->getMessage());
}

?>