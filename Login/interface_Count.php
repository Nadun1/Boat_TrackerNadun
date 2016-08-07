<?php
/**
 * Created by PhpStorm.
 * User: Nadun
 * Date: 8/7/2016
 * Time: 7:27 AM
 */ ?>

<!DOCTYPE html>
<html>
<head>
<title>count</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<h1>   Boat Count</h1>

<div>
    <form role="form"  method="POST" action="CumBoat.php">
        <div class="form-group">
            <label>Select District (select one):</label>
            <select class="form-control" name="selectdistrict">
                <option value="COl">COLOMBO</option>
                <option value="KAL">KALUTHARA</option>
                <option>Meega</option>
                <option>Dom</option>
            </select>
            <input type="submit" value="Submit the form"/>
        </div>
    </form>

</div>
</body>
</html>