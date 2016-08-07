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

    <style>
        body {
            background-image: url("1.jpg");
            background-size: 1380px 750px;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<Br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Boat Count</div>
            <div class="panel-body">
                Select District (select one):
    <form role="form"  method="POST" action="CumBoat.php">
        <div class="form-group">

            <select class="form-control" name="selectdistrict">
                <option value="COl">COLOMBO</option>
                <option value="KAL">KALUTHARA</option>
                <option>Meega</option>
                <option>Dom</option>
            </select><Br>
            <input type="submit" value="Submit the form"/>
        </div>
    </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
</body>
</html>