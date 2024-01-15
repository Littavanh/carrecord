<?php
session_start();
$bu_id = $_SESSION['bu_id'];

$where = 'where bu_id = '.$bu_id.'';

if($bu_id == 0){
    $where = '';
}

$wherebu = 'where b_id = '.$bu_id.'';

if($bu_id == 0){
    $wherebu = '';
}



$getCarId = $_GET['getCarId'];

// date_default_timezone_set('UTC'); // set timezone
// $date = new DateTime();
// $dateNowStr = $date->format('Y-m-d 00:00:00');

// $dateEnd = new DateTime();
// $dateNowEnd = $dateEnd->format('Y-m-d 23:59:59');



    // $fetch = "select * from v_diary_record_car where isDelete = 'no' 
    // AND car_reg_id = '$getCarId' AND date_add BETWEEN '$dateNowStr' AND '$dateNowEnd'";
    $fetch = "select * from v_diary_record_car where isDelete = 'no' 
    AND car_reg_id = '$getCarId'
    ORDER BY date DESC";
?>