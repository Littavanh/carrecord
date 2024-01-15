<?php
session_start();
$bu_id = $_SESSION['bu_id'];
$where = 'where bu_id = '.$bu_id.'';

if($bu_id == 0){
    $where = '';
}

$wherebu = 'where id = '.$bu_id.'';

if($bu_id == 0){
    $wherebu = '';
}


$fetch ="SELECT * FROM v_car $where";  


?>