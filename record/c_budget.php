<?php

$user_add = $_SESSION['user_id'];
$date_add =  date('Y-m-d', strtotime('+7 hours'));
if (isset($_POST["btnSaveNew"])) {
    $year = $mysqli->real_escape_string($_POST['year']);
    $month = $mysqli->real_escape_string($_POST['month']);
    $cb_carReg = $mysqli->real_escape_string($_POST['cb_carReg']);
    $txtAmount = $mysqli->real_escape_string($_POST['txtAmount']);

    $exploded = explode(",", $cb_carReg);
	$id = $exploded[0];

    $sql = "insert into tb_budget (car_id,budget_month,budget_year,amount,status_id)
			VALUES ('$id','$month','$year','$txtAmount',1)";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/budget");
    } else {
        echo "<center><h2>$sql</h2></center>";
    }
}

if (isset($_GET["del"])) {


    $id = $_GET["del"];

    $sql = "UPDATE tb_budget SET status_id= 0  WHERE id ='$id'";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/budget");
    } else {
        echo "<center><h2>ERROR Delete</h2></center>";
    }
}
