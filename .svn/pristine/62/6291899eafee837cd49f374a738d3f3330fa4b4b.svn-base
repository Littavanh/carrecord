<?php

$user_add = $_SESSION['user_id'];
$date_add =  date('Y-m-d', strtotime('+7 hours'));

$getCarId = $_GET['getCarId'];
$_SESSION['getCarId'] = $getCarId;

$getCarReg = $_GET['getCarReg'];
$_SESSION['getCarReg'] = $getCarReg;

$getType = $_GET['getType'];
$_SESSION['getType'] = $getType;

$getBrand = $_GET['getBrand'];
$_SESSION['getBrand'] = $getBrand;

$getModel = $_GET['getModel'];
$_SESSION['getModel'] = $getModel;

// echo '<script>alert("'.$_POST['type'].'")</script>';
$txtCar_reg = $_SESSION['getCarId'];

if (isset($_POST['type']) && isset($_POST["btnSaveNew"])) {
	$txtDateUsed = $mysqli->real_escape_string($_POST['dateUsed']);
	// echo '<script>alert("'.$txtDateUsed.'")</script>';
	for ($i = 0; $i < count($_POST['type']); $i++) {
		$id = $mysqli->real_escape_string($_POST['id'][$i]);
		// $txtDate = $mysqli->real_escape_string($_POST['txtDate'][$i]);
		$txtCar_regedit = $mysqli->real_escape_string($_POST['txtCar_reg'][$i]);
		$txtDriver = $mysqli->real_escape_string($_POST['txtDriver'][$i]);
		$txtUnit = $mysqli->real_escape_string($_POST['txtUnit'][$i]);
		$txtTime_start = $mysqli->real_escape_string($_POST['txtTime_start'][$i]);
		$txtTime_end = $mysqli->real_escape_string($_POST['txtTime_end'][$i]);
		$txtMeter_start = $mysqli->real_escape_string($_POST['txtMeter_start'][$i]);
		$txtMeter_end = $mysqli->real_escape_string($_POST['txtMeter_end'][$i]);
		$txtRemark = $mysqli->real_escape_string($_POST['txtRemark'][$i]);
		
		if ($txtMeter_start >= $txtMeter_end) {
			echo '<script>alert("ຈຳນວນ ກມ ສິ້ນສຸດ '.$txtMeter_end.' ຕ້ອງໃຫຍ່ກວ່າຈຳນວນ ກມ ເລີ່ມ '.$txtMeter_start.'")</script>';
		}else{
			switch ($_POST['type'][$i]) {
				case "added":
					// echo '<script>alert("'.$txtDriver.'")</script>';
					$sql = "insert into tb_diary_record_car (car_reg_id,unit_id,driver_id,date,time_start,time_end,meter_start,meter_end,remark,user_add)
					VALUES ('$txtCar_reg','$txtUnit','$txtDriver','$txtDateUsed','$txtTime_start','$txtTime_end','$txtMeter_start','$txtMeter_end','$txtRemark','$user_add') ";
					if ($mysqli->query($sql) === TRUE) {
						// echo "<center><h2>Insert Successfully</h2></center>";
					} else {
						// echo "<center><h2>$sql</h2></center>";
					}
					break;
				// case "edited":
				// 	// echo '<script>alert("'.$txtCar_reg.'")</script>';
				// 	$sql = "UPDATE tb_diary_record_car SET
				// 	 car_reg_id = '$txtCar_regedit', unit_id = '$txtUnit', driver_id = '$txtDriver', date = '$txtDate', time_start = '$txtTime_start',
				 // 	 time_end = '$txtTime_end', meter_start = '$txtMeter_start', meter_end = '$txtMeter_end', remark = '$txtRemark' 
				  // 	WHERE tb_diary_record_car.id ='$id'";
				// 	if ($mysqli->query($sql) === TRUE) {
				// 		// echo "<center><h2>Update Successfully</h2></center>";
				// 	} else {
				// 		// echo "<center><h2>$sql</h2></center>";
				// 	}
				// 	break;
			}
		}
	}
}
if (isset($_GET["del"])) {


	$id = $_GET["del"];

	$sql = "UPDATE tb_diary_record_car SET isDelete='yes'  WHERE id ='$id'";

	if ($mysqli->query($sql) === TRUE) {
		
	
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}
}
