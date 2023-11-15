<?php   
        

        if(isset($_POST['submit']))
        {
            if(isset($_POST['q1']))
            {
                echo "<p>Your answer for Q1:" .   $_POST['q1'] . "</p>";
            }
            else{
                echo"<p>Your did not make selection!</p>";
            }
            if(isset($_POST['q2']))
            {
                echo "<p>Your answer for Q2:" .  $_POST['q2'] . "</p>";
            }
            else{
                echo"<p>Your did not make selection!</p>";
            }
            if(isset($_POST['q3']))
            {
                echo "<p>Your answer for Q3:" .  $_POST['q3'] . "</p>";
            }
            else{
                echo"<p>Your did not make selection!</p>";
            }
            if(isset($_POST['q4']))
            {
                echo "<p>Workshop rating   :" .  $_POST['q4'] . "</p>";
            }
            else{
                echo"<p>Your did not make selection!</p>";
            }
        }
        else{
            echo "<p> You are not normal user! </p>";
        }
        
?>