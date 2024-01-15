<?

if (isset($_POST["btnSearch"])) {
	
	$cb_id = $mysqli->real_escape_string($_POST['cb_id']);
	$_SESSION['cb_id'] =  $cb_id;
	// echo '<script>alert("'.$cb_id.'")</script>';
	$sql = "SELECT * FROM tb_repair as a INNER JOIN tb_car as b ON a.car_id = b.id  where status = 'in repair' AND rp_id = '$cb_id'";
}


if (isset($_POST["btnSubmit"])) {
	

	// echo '<script>alert("'.$_SESSION['cb_id'].'")</script>';
	$sql = "UPDATE tb_repair SET status = 'Done' WHERE rp_id = '".$_SESSION['cb_id']."'";
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=repairDone/repair");
	} else {
		echo "<center><h2>ERROR Approve</h2></center>";
		
	}
}

?>