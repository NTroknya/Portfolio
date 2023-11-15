<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        form{
            padding:11px;
            border:1px soid #000;
            width:500px;
            margin:150px auto 0;
        }
        div{
            margin:15px 0;
        }
        .error{
            font-weight:700;
            color:red;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="scripts/process.php" method="post">
        <div>
            <label for="first">First Name</label> <br />
            <input type="text" name="first_name" id="first">
        </div>
        <div>
            <label for="last">Last Name</label> <br />
            <input type="text" name="last_name" id="last">
        </div>
        <div>
            <label for="e_mail">E-Mail</label> <br />
            <input type="text" name="email" id="e_mail">
        </div>
        <div>
            <label for="M">Male</label> 
            <input type="radio" name="gender" id="M" value="male">
        </div>
        <div>
            <label for="F">Female</label>
            <input type="radio" name="gender" id="F" value="female">
        </div>
        <div>
            <label>How did you hear about us?</label> <br />
            <input type="checkbox" value="internet" name="info[]">Internet <br />
            <input type="checkbox" value="radio" name="info[]">Radio <br />
            <input type="checkbox" value="tv" name="info[]">TV <br />
        </div>
        <div>
            <label>Give us your feedback!</label> <br />
            <textarea name="feedback" id="" cols="30" rows="10">
            
            </textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Send Info">
        </div>
    </form>
</body>
</html>