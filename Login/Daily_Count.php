<?php
/**
 * Created by PhpStorm.
 * User: Nadun
 * Date: 7/31/2016
 * Time: 11:02 AM
 */
//if(isset($_POST['date'])) {



function Daily_cum(){
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $connection = mysqli_connect("localhost", "root", "" , "boattracker");
    $sql = "SELECT boat_register_number FROM journy
    WHERE end_date BETWEEN '$startdate' AND '$enddate'";
    $query = mysqli_query($connection,$sql);
    $result=mysqli_fetch_assoc($query);

    foreach($result as $value){
        echo "$value <br />";
    }

}
Daily_cum();
?>