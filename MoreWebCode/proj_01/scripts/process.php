<link href="css/styles.css" rel="stylesheet" >
<?php
    $yourName = $_POST['your_name'];
    $phone = $_POST['phone'];
    $eMail = $_POST['email'];
    if(isset($_POST['remember']))
    {
        $remember = $_POST['remember'];
    }
    $message = $_POST['messages'];
    
    if(isset($_POST['submit']))
    {
        if(!empty($yourName))
        {
            echo("<p> Your Name:" . $yourName ."</p>");  
        }else{
            echo'<p class="error"> You must include a name </p>';
        }
        if(!empty($phone))
        {
            echo("<p> Phone Number:" . $phone ."</p>");    
        }else{
            echo'<p class="error"> You must include a phone number </p>';
        }
        if(!empty(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)))
        {
            echo("<p> Email:" . $eMail ."</p>");
        }else{
            echo'<p class="error"> You must include an email </p>';
        }
        if(isset($remember))
        {
            echo'<p> You have chosen to be remembered </p>';
        }
        echo("<p> Messages:" . $message . "</p>");
    }else{
        echo"You are not human";
    }
    
    
?>    