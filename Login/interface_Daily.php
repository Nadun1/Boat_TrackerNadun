<?php
/**
 * Created by PhpStorm.
 * User: Nadun
 * Date: 8/7/2016
 * Time: 9:25 AM
 */
?>
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
<body background="1.jpg">
<Br>
<Br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<div class="panel panel-primary">
    <div class="panel-heading">Daily Boat Count</div>

    <div class="panel-body">
    <form role="form"  method="POST" action="Daily_Count.php">
        <input type="date" name="startdate"> From

        <input type="date" name="enddate" ><br><br>
        <input type="submit">
    </form>
    </div>
</div>
</div>
    <div class="col-md-3"></div>
</div>
</body>
</html>
