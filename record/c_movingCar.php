<?php


if (isset($_POST["btnMove"])) {

	$cb_car = $mysqli->real_escape_string($_POST['cb_car']);
	$txtDateFrom = $mysqli->real_escape_string($_POST['txtDateFrom']);
	$txtDateTo = $mysqli->real_escape_string($_POST['txtDateTo']);

	$exploded = explode(",", $cb_car);
	$id = $exploded[0];
	$bu_id  = $exploded[1];
	$buName  = $exploded[2];
	$cb_bu = $mysqli->real_escape_string($_POST['cb_bu']);
	// echo '<script type="text/javascript">' .
	// 'console.log(' . $id . ');</script>';
	// echo '<script type="text/javascript">' .
	// 'console.log(' . $buName . ');</script>';
	// echo '<script type="text/javascript">' .
	//       'console.log(' . $cb_bu . ');</script>';

	if ($cb_car == 0 && $cb_bu == 0) {
		echo '<script >alert("ກະລຸນາໃສ່ຂໍ້ມູນໃຫ້ຄົບ !!!");</script>';
	} else {
		$sql = "update tb_car set bu_id = '$cb_bu' where id = '$id'";

		if ($mysqli->query($sql) === TRUE) {
			$sql1 = "insert into tb_move_car (car_id,fromBu,toBu,fromDate,toDate)
		VALUES ('$id','$bu_id','$cb_bu','$txtDateFrom','$txtDateTo') ";

			if ($mysqli->query($sql1) === TRUE) {
				header("Location: ?d=record/movingCar");
			} else {
				echo "<center><h2>ERROR INSERT</h2></center>";
			}
		} else {
			echo "<center><h2>ERROR INSERT</h2></center>";
		}
	}
}
