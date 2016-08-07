<?php
/**
 * Created by PhpStorm.
 * User: Nadun
 * Date: 7/31/2016
 * Time: 5:02 PM
 */
if(isset($_POST['selectdistrict'])) {
    $selectOption = $_POST['selectdistrict'];
    echo $selectOption;
}

function CummBoats()
{
    $connection = mysqli_connect("localhost", "root", "", "boattracker");

    $tableList = array();
    $res = mysqli_query($connection, "SHOW TABLES");

    while ($cRow = mysqli_fetch_array($res)) {
        $tableList[] = $cRow[0];

    }
    //print_r($tableList);
    //echo '<br>';
    //echo ($tableList[3]);
    $newArr = array("ad_fishery_officer","boat","boat_owner","coast_guard",
                    "device","discrict","district_navy_officer","journy","launching_point",
                    "ministry_officer","user");

    $boatdistrict = array();
    $total=0;
    $col = 0;
    $kat = 0;
    $boatArray = array();
    print_r($tableList);
    foreach($tableList as $val1){
        echo $val1 ."<Br>";
        if(!in_array($val1,$newArr)){
            array_push($boatArray,$val1);//push boatid to an array
            $total +=1;

            $sql = "SELECT boat_owner.district_code
                FROM boat , boat_owner
                WHERE $val1=boat.boat_register_number
                AND boat.ownerid=boat_owner.owner_id";
            $query = mysqli_query($connection,$sql);
            $boatdistrict = mysqli_fetch_array($query);

        }

    }
    foreach($boatdistrict as $val2){
        if($val2 = "COL"){
            $col +=1;

        }else{
            $kat += 1;
        }
    }

    //print_r($boatArray);
    echo "Total No of Boats : ".$total;
    print_r($boatdistrict);

    if( $selectOption="COL"){
        echo "Boats From Colomobo :".$col;
    }


}CummBoats();

