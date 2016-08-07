<?php
/**
 * Created by PhpStorm.
 * User: Nadun
 * Date: 7/31/2016
 * Time: 12:44 PM
 */
function select_district(){
    $sql = "SELECT boat_owner.district_code
FROM journy  , boat , boat_owner
WHERE journy.boat_register_number=boat.boat_register_number
      AND boat.ownerid=boat_owner.owner_id";
}