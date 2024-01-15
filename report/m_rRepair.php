<?php
$strDate = $mysqli->real_escape_string($_GET['strDate']); 
$endDate = $mysqli->real_escape_string($_GET['endDate']);
$status = $mysqli->real_escape_string($_GET['cb_status']);
	// echo '<script>alert("'.$status.'")</script>';
    $whereCause ="";
    if ($status != '0' || $status == '') {
        $whereCause = " AND status='$status' ";
    }
$sql = "SELECT *
FROM v_repair where date BETWEEN '$strDate' AND '$endDate'  ".$whereCause;
