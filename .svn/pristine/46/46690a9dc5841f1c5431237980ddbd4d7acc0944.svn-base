<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtType = $mysqli->real_escape_string($_POST['txtType']); 	 	 
   
    
	$sql = "insert into tb_typecar (type)
			VALUES ('$txtType') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/cartype");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtType = $mysqli->real_escape_string($_POST['txtType']); 	 	 	 	 
    
    

	$sql = "UPDATE tb_typecar SET type='$txtType' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/cartype");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM tb_typecar WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/cartype");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 