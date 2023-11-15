<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayton CycloCrossings</title>
</head>
<body>
    <h1>Dayton CycloCrossings</h1>
    <h2>Rider Profile</h2>
    <p>CycloCrossings is a great place to find ride partners and create tour groups. If you're a member, fill out <br />
    the information below to be entered into our riders database. All information entered in CycloCrossings <br />
    is confidential and will not be shared with other websites or commercial enterprises</p>
    <hr>
    <form method="post" action="display_data.php">
        <div>
            <label for="r_name">Rider Name</label>
            <input type="text" name="r_name" id="r_name" placeholder="Enter name here"/>
        </div>
        <div>
            <label for="age_group">Age Group</label>
            <select name="age_group" id="age_group">
                <option value="16-20">16-20</option>
                <option value="21-30">21-30</option>
                <option value="31-40">31-40</option>
                <option value="41-50">41-50</option>
                <option value="51-60">51-60</option>
                <option value="61-70">61-70</option>
                <option value="71+">71+</option>
            </select>
        </div>
        <div>
            <label for="bike_type">Bike</label>
            <select name="bike_type" id="bike_type">
                <option value="Road Bike">Road Bike</option>
                <option value="Mountain Bike">Mountain Bike</option>
                <option value="Either">Either</option>
            </select>
        </div>
        <div>
            <label for="route_type">Route</label>
            <select name="route_type" id="route_type">
                <option value="Road">Road</option>
                <option value="Trail">Trail</option>
                <option value="Either">Either</option>
            </select>
        </div>
        <div>
            <label for="accom_type">Accomodation</label>
            <select name="accom_type" id="accom_type">
                <option value="Camping">Camping</option>
                <option value="Motel">Motel</option>
                <option value="Either">Either</option>
            </select>
        </div>
        <div>
            <label for="region">Region</label>
            <select name="region" id="region">
                <option value="Northeast">Northeast</option>
                <option value="East Coast">East Coast</option>
                <option value="Southeast">Southeast</option>
                <option value="Midwest">Midwest</option>
                <option value="Mountain">Mountain</option>
                <option value="Southwest">Southwest</option>
                <option value="West Coast">West Coast</option>
                <option value="Northwest">Northwest</option>
            </select>
        </div>
        <div>
            <label for="miles_per_day">Miles per Day</label>
            <select name="miles_per_day" id="miles_per_day">
                <option value="21-40">21-40</option>
                <option value="41-60">41-60</option>
                <option value="61-80">61-80</option>
                <option value="81-100">81-100</option>
                <option value="100+">100+</option>
            </select>
        </div>
        <div>
            <label for="comment">Other Comments</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <hr>
        <div>
            <input type="submit" name="submit" value="Register" />
        </div>
    </form>
</body>
</html>