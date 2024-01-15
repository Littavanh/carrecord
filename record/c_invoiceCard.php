<?php

$user_add = $_SESSION['user_id'];
$date_add =  date('Y-m-d', strtotime('+7 hours'));
if (isset($_POST["btnSaveNew"])) {
    $year = $mysqli->real_escape_string($_POST['year']);
    $month = $mysqli->real_escape_string($_POST['month']);
    $cb_depart = $mysqli->real_escape_string($_POST['cb_depart']);
    $txtAmount = $mysqli->real_escape_string($_POST['txtAmount']);

    $sql = "insert into tb_cardinvoice (invoice_month,invoice_year,bu_id,invoice_amount,status_id)
			VALUES ('$month','$year','$cb_depart','$txtAmount',1)";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/invoiceCard");
    } else {
        echo "<center><h2>$sql</h2></center>";
    }
}

if (isset($_GET["del"])) {


    $id = $_GET["del"];

    $sql = "UPDATE tb_cardinvoice SET status_id= 0  WHERE id ='$id'";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=record/invoiceCard");
    } else {
        echo "<center><h2>ERROR Delete</h2></center>";
    }
}
