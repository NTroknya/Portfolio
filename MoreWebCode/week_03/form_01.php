<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="scripts/process.php" method="post">
        <ol>
            <li>How satisfied were you with the conference workshop?
                <ol>
                    <li><input type="radio" name="q1" value="A"><label>Very Satisfied</label></li>
                    <li><input type="radio" name="q1" value="B"><label>Satisfied</label></li>
                    <li><input type="radio" name="q1" value="C"><label>Not Satisfied</label></li>
                    <li><input type="radio" name="q1" value="D"><label>Dissatisfied</label></li>
                </ol>
            </li>
            <li>How satisfied were you with the conference speakers?
                <ol>
                    <li><input type="radio" name="q2" value="A"><label>Very Satisfied</label></li>
                    <li><input type="radio" name="q2" value="B"><label>Satisfied</label></li>
                    <li><input type="radio" name="q2" value="C"><label>Not Satisfied</label></li>
                    <li><input type="radio" name="q2" value="D"><label>Dissatisfied</label></li>
                </ol>
            </li>
            <li>How likely you will attend next year conference?
                <ol>
                    <li><input type="radio" name="q3" value="A"><label>Very Likely</label></li>
                    <li><input type="radio" name="q3" value="B"><label>Likely</label></li>
                    <li><input type="radio" name="q3" value="C"><label>Not Likely</label></li>
                    <li><input type="radio" name="q3" value="D"><label>Never see me again</label></li>
                </ol>
            </li>
            <li>How do you rate our workshop? [ 0 - 10 ]
                <ol>
                    <li><input type="range" min="0" max="10" value="5" step="1" name="q4"></li>
                </ol>
            </li>
        </ol>
        <input type="submit" name="submit" value="Submit!">
    </form>
</body>
</html>