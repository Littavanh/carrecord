<?php

if (isset($_POST["btnSaveNew"])) {
    $txtUsername = $mysqli->real_escape_string($_POST['txtUsername']);
    $getPass = '123';
    $password = md5($getPass . '1it@v@nh' . $txtUsername);
    $txtFirstname = $mysqli->real_escape_string($_POST['txtFirstname']);
    $txtLastname = $mysqli->real_escape_string($_POST['txtLastname']);
    $cb_bu = $mysqli->real_escape_string($_POST['cb_bu']);

    $sql = "insert into tb_employee (firstName,lastName,user_add)
			VALUES ('$txtFirstname','$txtLastname','1') ";



    if ($mysqli->query($sql) === TRUE) {


        $select = "SELECT MAX(empId) FROM tb_employee ";
        if ($result = $mysqli->query($select)) {
            while ($row = $result->fetch_row()) {
                $empId = $row[0];
            }
        }

        $sql1 = "insert into tb_user (username,password,role_id,user_add,empId,bu_id)
        VALUES ('$txtUsername','$password','2','1','$empId','$cb_bu') ";

        if ($mysqli->query($sql1) === TRUE) {
            header("Location: ?d=user/user");
        } else {
            echo "<center><h2>ERROR INSERT</h2></center>";
        }
    } else {
        echo "<center><h2>ERROR INSERT</h2></center>";
    }
}



if (isset($_GET["reset"]) && isset($_GET["username"])) {


    $user_id = $_GET["reset"];
    $username = $_GET["username"];

    $getPass = '123';
    $password = md5($getPass . '1it@v@nh' . $username);
    $sql = "UPDATE tb_user set password = '$password' WHERE user_id ='$user_id'";

    if ($mysqli->query($sql) === TRUE) {

        header("Location: ?d=user/user");
    } else {
        echo "<center><h2>ERROR Delete</h2></center>";
    }
}


if (isset($_GET["user_id"]) && isset($_GET["empId"])) {


    $user_id = $_GET["user_id"];
    $empId = $_GET["empId"];

    $sql = "DELETE FROM tb_user WHERE user_id ='$user_id'";

    if ($mysqli->query($sql) === TRUE) {


        $sql1 = "DELETE FROM tb_employee WHERE empId ='$empId'";
        if ($mysqli->query($sql1) === TRUE) {


            header("Location: ?d=user/user");
        } else {
            echo "<center><h2>ERROR Delete</h2></center>";
        }
    } else {
        echo "<center><h2>ERROR Delete</h2></center>";
    }
}
