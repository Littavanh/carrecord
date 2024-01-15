<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtBrand = $mysqli->real_escape_string($_POST['txtBrand']); 	 	 
   
    
	$sql = "insert into tb_brandcar (brand)
			VALUES ('$txtBrand') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/carbrand");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtBrand = $mysqli->real_escape_string($_POST['txtBrand']); 	 	 	 	 
    
    

	$sql = "UPDATE tb_brandcar SET brand='$txtBrand' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/carbrand");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM tb_brandcar WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/carbrand");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 