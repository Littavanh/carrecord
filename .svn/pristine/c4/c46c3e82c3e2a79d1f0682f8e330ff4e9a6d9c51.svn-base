<?php
session_start();
$bu_id = $_SESSION['bu_id'];
$where = 'where bu_id = ' . $bu_id . '';

if ($bu_id == 0) {
    $where = '';
}

$year = $mysqli->real_escape_string($_GET['year']);
$month = $mysqli->real_escape_string($_GET['month']);
$car_reg = $mysqli->real_escape_string($_GET['car_reg']);



$report = "SELECT *,SUM(a.meter_end - a.meter_start) as km_use, b.amount as amonth FROM
     v_diary_record_car as a INNER JOIN v_budget as b ON a.car_reg = b.car_reg  AND a.yearRecord = b.budget_year AND a.monthRecord = b.budget_month
    WHERE a.car_reg ='$car_reg' AND a.yearRecord = '$year' AND a.monthRecord = '$month' AND a.isDelete = 'no' AND b.status_id = 1
   GROUP BY a.car_reg,a.yearRecord,a.monthRecord";

$byMonth = "SELECT SUM(a.meter_end - a.meter_start) as total FROM v_diary_record_car as a
WHERE a.car_reg ='$car_reg' AND a.yearRecord = '$year' AND a.monthRecord = '$month' AND a.isDelete = 'no'
GROUP BY a.car_reg,a.yearRecord,a.monthRecord";
