<?php
session_start();
$bu_id = $_SESSION['bu_id'];
$where = 'where id = '.$bu_id.'';

if($bu_id == 0){
    $where = '';
}


$year = $mysqli->real_escape_string($_GET['year']);
$cb_bu = $mysqli->real_escape_string($_GET['cb_bu']);
$month = $mysqli->real_escape_string($_GET['month']);
$_SESSION['month'] = $month;
$wherecb_bu = 'where id = '.$cb_bu.'';

if($cb_bu == 0){
    $wherecb_bu = '';

    
}

$depart = "SELECT * FROM tb_business $wherecb_bu";


if ($cb_bu !=0) {
    # code...
    $report = "SELECT a.car_reg,IFNULL(d1.kmUsage, 0) as kmUsage1, a.monthRecord,a.yearRecord,b.amount,SUM(a.meter_end-a.meter_start) as totalKm 
FROM v_diary_record_car as a 
LEFT JOIN v_drc_dept_ub$cb_bu as d1 ON a.car_reg = d1.car_reg AND a.monthRecord = d1.monthRecord AND a.yearRecord = d1.yearRecord 
LEFT JOIN v_budget as b ON a.car_reg = b.car_reg AND a.monthRecord = b.budget_month AND a.yearRecord = b.budget_year AND b.status_id = 1 
WHERE a.yearRecord = '$year' AND a.monthRecord = '$month' AND a.isDelete = 'no' 
GROUP BY a.car_reg,a.monthRecord,a.yearRecord 
ORDER BY a.id,a.monthRecord,a.yearRecord";


$feeCard = "SELECT a.name,b.month,b.year,b.card_no,SUM(b.amount) as amount,SUM(b.tax) as tax,SUM(b.adjust) as adjust, SUM(b.amount+b.tax+b.adjust) as total
FROM tb_business as a LEFT JOIN v_feecard as b 
ON a.id = b.bid AND b.month = '$month' AND b.year = '$year' AND b.status_id =1
WHERE a.id = $cb_bu
GROUP BY name
ORDER BY a.id ASC";

$numMunOnly = "SELECT a.*,SUM(b.meter_end - b.meter_start) as sumMeter FROM v_budget as a 
LEFT JOIN v_diary_record_car as b ON a.car_reg = b.car_reg
where a.status_id=1 AND a.budget_month='$month' AND a.budget_year = '$year' AND a.bu_id = '$cb_bu'
GROUP BY a.car_reg,a.budget_month,a.budget_year
ORDER BY a.id ASC";

}else {
    
    $report = "SELECT a.car_reg,IFNULL(d1.kmUsage, 0) as kmUsage1,IFNULL(d2.kmUsage, 0) as kmUsage2,
IFNULL(d3.kmUsage, 0) as kmUsage3,IFNULL(d4.kmUsage, 0) as kmUsage4,
IFNULL(d5.kmUsage, 0) as kmUsage5,
IFNULL(d6.kmUsage, 0) as kmUsage6,
IFNULL(d7.kmUsage, 0) as kmUsage7,IFNULL(d8.kmUsage, 0) as kmUsage8,
IFNULL(d9.kmUsage, 0) as kmUsage9,
IFNULL(d10.kmUsage, 0) as kmUsage10,
a.month,a.year,a.type,b.amount,g.amount as gas
FROM v_car_view as a
LEFT JOIN v_drc_dept_ub1 as d1 
ON a.car_reg = d1.car_reg AND a.month = d1.monthRecord AND a.year = d1.yearRecord
LEFT JOIN v_drc_dept_ub2 as d2
ON a.car_reg = d2.car_reg  AND a.month = d2.monthRecord AND a.year = d2.yearRecord
LEFT JOIN v_drc_dept_ub3 as d3 
on a.car_reg = d3.car_reg  AND a.month = d3.monthRecord AND a.year = d3.yearRecord
LEFT JOIN v_drc_dept_ub4 as d4
ON a.car_reg = d4.car_reg  AND a.month = d4.monthRecord AND a.year = d4.yearRecord
LEFT JOIN v_drc_dept_ub5 as d5
ON a.car_reg = d5.car_reg AND a.month = d5.monthRecord AND a.year = d5.yearRecord
LEFT JOIN v_drc_dept_ub6 as d6
ON a.car_reg = d6.car_reg AND a.month = d6.monthRecord AND a.year = d6.yearRecord
LEFT JOIN v_drc_dept_ub7 as d7
ON a.car_reg = d7.car_reg AND a.month = d7.monthRecord AND a.year = d7.yearRecord
LEFT JOIN v_drc_dept_ub8 as d8
ON a.car_reg = d8.car_reg AND a.month = d8.monthRecord AND a.year = d8.yearRecord
LEFT JOIN v_drc_dept_ub9 as d9 
ON a.car_reg = d9.car_reg AND a.month = d9.monthRecord AND a.year = d9.yearRecord
LEFT JOIN v_drc_dept_ub10 as d10 
ON a.car_reg = d10.car_reg AND a.month = d10.monthRecord AND a.year = d10.yearRecord
LEFT JOIN v_budget as b 
ON a.car_reg = b.car_reg AND a.month = b.budget_month AND a.year = b.budget_year AND b.status_id = 1
LEFT JOIN v_gasprice as g 
ON a.car_reg = g.car_reg AND a.month = g.gas_price_month AND a.year = g.gas_price_year AND g.status_id = 1

WHERE a.year = '$year' AND a.month = '$month' 
ORDER BY a.id,a.month,a.year";


$feeCard = "SELECT a.name,b.month,b.year,b.card_no,SUM(b.amount) as amount,SUM(b.tax) as tax,SUM(b.adjust) as adjust, SUM(b.amount+b.tax+b.adjust) as total
FROM tb_business as a LEFT JOIN v_feecard as b 
ON a.id = b.bid AND b.month = '$month' AND b.year = '$year' AND b.status_id =1
GROUP BY name
ORDER BY a.id ASC";

$numMunOnly = "SELECT a.*,SUM(b.meter_end - b.meter_start) as sumMeter FROM v_budget as a 
LEFT JOIN v_diary_record_car as b ON a.car_reg = b.car_reg
where a.status_id=1 AND a.budget_month='$month' AND a.budget_year = '$year'
GROUP BY a.car_reg,a.budget_month,a.budget_year
ORDER BY a.id ASC";
}


