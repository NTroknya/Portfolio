<style>
    table{
        border:1px solid #000;
        padding:7px;
        border-collapse:collapse;
    }
    th, td{border:1px solid #000;}
</style>

<?php

$ads = $_POST['ads'];
echo"<ul>";
    for($index = 0; $index < count($ads); $index++)
    {
        echo"<li>" . $ads[$index] . "</li>";
    }
echo"</ul>";



echo"<table>";
    echo"<tr>";
        echo"<th>Value</th>";
    echo"</tr>";
    for($index = 0; $index < count($ads); $index++)
    {
        echo"<tr>";
            echo"<td>" . $ads[$index] . "</td>";
        echo"</tr>";
    }
echo"</table>";