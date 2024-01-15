<?php

if (isset($_POST["btnSaveNew"])) {
	$txtCarReg = $mysqli->real_escape_string($_POST['txtCarReg']);
	$cb_typecar = $mysqli->real_escape_string($_POST['cb_typecar']);
	$cb_brandcar = $mysqli->real_escape_string($_POST['cb_brandcar']);
	$txtModel = $mysqli->real_escape_string($_POST['txtModel']);
	$txtColor = $mysqli->real_escape_string($_POST['txtColor']);
	$txtMachineNo = $mysqli->real_escape_string($_POST['txtMachineNo']);
	$txtMachineNo1 = $mysqli->real_escape_string($_POST['txtMachineNo1']);
	$cb_bu = $mysqli->real_escape_string($_POST['cb_bu']);
	$txtAmount_limit = $mysqli->real_escape_string($_POST['txtAmount_limit']);
	$cb_status = $mysqli->real_escape_string($_POST['cb_status']);
	$sql = "insert into tb_car (car_reg,type_id,brand_id,model,status_id,amount_limit,bu_id,color,machine_no,machine_no1)
			VALUES ('$txtCarReg','$cb_typecar','$cb_brandcar','$txtModel','$cb_status','$txtAmount_limit','$cb_bu','$txtColor','$txtMachineNo','$txtMachineNo1') ";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/car");
	} else {
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if (isset($_POST["btSaveEdit"])) {
	$id = $mysqli->real_escape_string($_POST['txtId']);
	$txtCarReg = $mysqli->real_escape_string($_POST['txtCarReg']);
	$cb_typecar = $mysqli->real_escape_string($_POST['cb_typecar']);
	$txtBrand = $mysqli->real_escape_string($_POST['txtBrand']);
	$txtModel = $mysqli->real_escape_string($_POST['txtModel']);
	$txtColor = $mysqli->real_escape_string($_POST['txtColor']);
	$txtMachineNo = $mysqli->real_escape_string($_POST['txtMachineNo']);
	$txtMachineNo1 = $mysqli->real_escape_string($_POST['txtMachineNo1']);
	$cb_bu = $mysqli->real_escape_string($_POST['cb_bu']);
	$txtAmount_limit = $mysqli->real_escape_string($_POST['txtAmount_limit']);
	$cb_status = $mysqli->real_escape_string($_POST['cb_status']);

	// if($txtBrand == ''){
	// 	$txtBrand = 0;
	// }

	$sql = "UPDATE tb_car SET car_reg='$txtCarReg',type_id='$cb_typecar',brand_id='$txtBrand',model='$txtModel',status_id='$cb_status',amount_limit='$txtAmount_limit',bu_id='$cb_bu',color='$txtColor',machine_no='$txtMachineNo',machine_no1='$txtMachineNo1' WHERE id = '$id' ";


	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/car");
	} else {
		echo "<center><h2>$sql</h2></center>";
	}
}




if (isset($_GET["del"])) {


	$id = $_GET["del"];

	$sql = "DELETE FROM tb_car WHERE id ='$id'";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/car");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}
}



if (isset($_POST["btnMove"])) {

	$cb_car = $mysqli->real_escape_string($_POST['cb_car']);

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
			$sql1 = "insert into tb_move_car (car_id,fromBu,toBu)
		VALUES ('$id','$bu_id','$cb_bu') ";

			if ($mysqli->query($sql1) === TRUE) {
				header("Location: ?d=master/car");
			} else {
				echo "<center><h2>ERROR INSERT</h2></center>";
			}
		} else {
			echo "<center><h2>ERROR INSERT</h2></center>";
		}
	}
}
