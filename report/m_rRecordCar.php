<?php
$year = $mysqli->real_escape_string($_GET['year']); 
$month = $mysqli->real_escape_string($_GET['month']); 

$dept = $mysqli->real_escape_string($_GET['dept_id']);



    $report = "SELECT *,SUM(a.meter_end - a.meter_start) as km_use FROM v_diary_record_car as a
    WHERE a.b_id ='$dept' AND a.yearRecord = '$year' AND a.monthRecord = '$month' AND a.isDelete = 'no'
   GROUP BY a.car_reg,a.yearRecord,a.monthRecord";


?>