<?php
    class User{
        //properties .. e.g. data
        private $userName;
        private $email;
        
        //methods
        public function __construct($userName, $email)
        {
            $this ->userName = $userName;
            $this ->email = $email;
        }
        
        public function setUserName($newUser)
        {
            $this ->userName = $newUser;
        }
        public function getUserName()
        {
            return $this->userName;
        }
        public function setEmail($newEmail)
        {
            $this ->email = $newEmail;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setInfo($newUser, $newEmail){
            $this ->userName = $newUser;
            $this ->email = $newEmail;
        }
    }
//instance of class user
    $userOne = new User("Mr Garvy", "dummy1@email.com");
//instance of class user    
    $userTwo = new User("A-A-Ron", "dummy2@email.com");

    echo "Username: " . $userOne -> getUserName() . "<br />";
    echo "Email: " . $userOne -> getEmail() . "<br />";
    echo "<hr />";
    
    echo "Username: " . $userTwo -> getUserName() . "<br />";
    echo "Email: " . $userTwo -> getEmail() . "<br />";
    echo "<hr />";
    
    $userOne -> setUserName("De-Nise");
    $userOne -> setEmail("dummy3@dummy.com");
    echo "Username: " . $userOne -> getUserName() . "<br />";
    echo "Email: " . $userOne -> getEmail() . "<br />";
    echo "<hr />";

    $userTwo -> setUserName("Balakee");
    $userTwo -> setEmail("dummy4@dummy.com");
    echo "Username: " . $userTwo -> getUserName() . "<br />";
    echo "Email: " . $userTwo -> getEmail() . "<br />";
    echo "<hr />";

    $userOne -> setInfo("Steven", "dummy5@dummy.com");
    $userTwo -> setInfo("Not Steven", "dummy6@dummy.com");

    echo "Username: " . $userOne -> getUserName() . "<br />";
    echo "Email: " . $userOne -> getEmail() . "<br />";
    echo "<hr />";

    echo "Username: " . $userTwo -> getUserName() . "<br />";
    echo "Email: " . $userTwo -> getEmail() . "<br />";
    echo "<hr />";





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