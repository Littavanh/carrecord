<?php

$user_add = $_SESSION['user_id'];
$date_add =  date('Y-m-d', strtotime('+7 hours'));
if (isset($_POST["btnSaveNew"])) {
    $year = $mysqli->real_escape_string($_POST['year']);
    $month = $mysqli->real_escape_string($_POST['month']);
    $cb_depart = $mysqli->real_escape_string($_POST['cb_depart']);
    $txtAmount = $mysqli->real_escape_string($_POST['txtAmount']);
    $txtTax = $mysqli->real_escape_string($_POST['txtTax']);
    $txtCardNo = $mysqli->real_escape_string($_POST['txtCardNo']);
    $txtAdjust = $mysqli->real_escape_string($_POST['txtAdjust']);

    $sql = "insert into tb_feecard (fee_month,fee_year,bu_id,fee_amount,tax,status_id,card_no,adjust)
			VALUES ('$month','$year','$cb_depart','$txtAmount','$txtTax',1,'$txtCardNo','$txtAdjust')";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/feeCard");
    } else {
        echo "<center><h2>$sql</h2></center>";
    }
}

if (isset($_GET["del"])) {


    $id = $_GET["del"];

    $sql = "UPDATE tb_feecard SET status_id= 0  WHERE id ='$id'";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/feeCard");
    } else {
        echo "<center><h2>ERROR Delete</h2></center>";
    }
}
