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
    $fetch = "select * from v_diary_record_car where isDelete = 'no' and car_reg_id = '$getCarId'";
?>