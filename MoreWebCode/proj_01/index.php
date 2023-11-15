<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="css/styles.css" rel="stylesheet" >
</head>
<body>
    <h2>Contact Form</h2>
    <form action="scripts/process.php" method="post">
        <div>
            <label for="yName">Your Name</label> <br />
            <input type="text" name="your_name" id="yName">
        </div>
        <div>
            <label for="phone">Phone Number</label> <br />
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="e_mail">E-Mail</label> <br />
            <input type="text" name="email" id="e_mail">
        </div>
        <div>
            <label>Remember Me</label> <br />
            <input type="checkbox" value="remember" name="remember"> <br />
        </div>
        <div>
            <label>Messages</label> <br />
            <textarea name="messages" id="" cols="30" rows="10">
            
            </textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit Info">
        </div>
    </form>
</body>
</html>