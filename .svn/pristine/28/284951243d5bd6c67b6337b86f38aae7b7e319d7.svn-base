<?php

$user_add = $_SESSION['user_id'];
$date_add =  date('Y-m-d', strtotime('+7 hours'));
if (isset($_POST["btnSaveNew"])) {
    $year = $mysqli->real_escape_string($_POST['year']);
    $month = $mysqli->real_escape_string($_POST['month']);
    $cb_carReg = $mysqli->real_escape_string($_POST['cb_carReg']);
    $txtAmount = $mysqli->real_escape_string($_POST['txtAmount']);
    $txtPrice = $mysqli->real_escape_string($_POST['txtPrice']);

    $sql = "insert into tb_gasprice (car_id,gas_price_month,gas_price_year,gas_price,amount,status_id)
			VALUES ('$cb_carReg','$month','$year','$txtPrice','$txtAmount',1)";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/gasPrice");
    } else {
        echo "<center><h2>$sql</h2></center>";
    }
}

if (isset($_GET["del"])) {


    $id = $_GET["del"];

    $sql = "UPDATE tb_gasprice SET status_id= 0  WHERE id ='$id'";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/gasPrice");
    } else {
        echo "<center><h2>ERROR Delete</h2></center>";
    }
}
