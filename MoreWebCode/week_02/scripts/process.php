<?php
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $eMail = $_POST['email'];
    $gender = $_POST['gender'];
    $info = $_POST['info'];
    
    if(isset($_POST['submit']))
    {
        if(!empty($firstName))
        {
            echo("<p> First Name:" . $firstName ."</p>");  
        }else{
            echo'<p class="error"> You must include a first name </p>';
        }
        if(!empty($lastName))
        {
            echo("<p> Last Name:" . $lastName ."</p>");    
        }else{
            echo'<p class="error"> You must include a last name </p>';
        }
        if(!empty(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)))
        {
            echo("<p> Email:" . $eMail ."</p>");
        }else{
            echo'<p class="error"> You must include an email </p>';
        }
        if(isset($gender))
        {
            echo"<p>Gender: $gender </p>";
        }else{
            echo'<p class="error"> You must select a gender </p>';
        }
        $count = count($info);
        if(isset($info))
        {
            for($index= 0;$index < $count; $index++)
            {
                echo $info[$index] . "<br />";
            }
        }
    }else{
        echo"You are not human";
    }
    
    
?>    