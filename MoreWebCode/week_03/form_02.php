<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Ads</h3>
    <form action="scripts/process2.php" method="post">
    <div>
        <p>How did you hear about US!???</p>
        <input type="checkbox" name="ads[]" value="Web">Your web site! <br />
        <input type="checkbox" name="ads[]" value="Radio">On Radio <br />
        <input type="checkbox" name="ads[]" value="LinkedIn">LinkedIn <br />
        <input type="checkbox" name="ads[]" value="YouTube">YouTube <br />
    </div>
    <div>
        <input type="submit" name="submit" value="Select option(s)">
    </div>
    </form>
</body>
</html>