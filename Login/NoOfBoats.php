<?php
/*
* Created by PhpStorm.
* User: Nadun
* Date: 7/31/2016
* Time: 1:35 AM
*/
function CummBoats() {
    $connection = mysqli_connect("localhost", "root", "" , "boattracker");

    $tableList = array();
    $res = mysqli_query($connection,"SHOW TABLES");

    while($cRow = mysqli_fetch_array($res))
    {
        $tableList[] = $cRow[0];

    }
    //print_r($tableList);
    //echo '<br>';
    //echo ($tableList[3]);
    $exboat = array();
    foreach($tableList as $value){
        $sql = "SELECT boat_owner.district_code
        FROM boat , boat_owner
        WHERE $value=boat.boat_register_number
        AND boat.ownerid=boat_owner.owner_id";
    }

}
?>


