<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtName = $mysqli->real_escape_string($_POST['txtName']); 	 	 
 	$txtSurname = $mysqli->real_escape_string($_POST['txtSurname']); 	 	 
 	$txtNickname = $mysqli->real_escape_string($_POST['txtNickname']); 	 	 
 	$cb_bu = $mysqli->real_escape_string($_POST['cb_bu']); 	 	 
   
    
	$sql = "insert into tb_driver (name,surname,nickname,bu_id)
			VALUES ('$txtName','$txtSurname','$txtNickname','$cb_bu') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/driver");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtName = $mysqli->real_escape_string($_POST['txtName']); 	 	 
 	$txtSurname = $mysqli->real_escape_string($_POST['txtSurname']); 	 	 
 	$txtNickname = $mysqli->real_escape_string($_POST['txtNickname']); 
	 $cb_bu = $mysqli->real_escape_string($_POST['cb_bu']); 	 	
    

	$sql = "UPDATE tb_driver SET name='$txtName',surname='$txtSurname',nickname='$txtNickname',bu_id='$cb_bu' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/driver");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM tb_driver WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/driver");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 