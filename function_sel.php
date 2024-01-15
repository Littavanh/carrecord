<?php
include_once("config.php");



function checkLogin($getUsername, $getPass, $mysqli) { 
	//$date = new DateTime();

   
    $passmd5 = md5($getPass.'1it@v@nh'.$getUsername);
    $qry = " SELECT * FROM  v_user  WHERE  username='$getUsername' and password='$passmd5'  ";
    
    if ($result_auth = $mysqli->query($qry)) {
    	while ($row = $result_auth->fetch_row()) {
	        $_SESSION['user_id'] = $row[0];
	 		$_SESSION['username'] = $row[1];       
	 		$_SESSION['password'] = $row[2];       
	        $_SESSION['role_id'] = $row[3];
	        $_SESSION['bu_id'] = $row[7];
	        $_SESSION['firstName'] = $row[8];
	        $_SESSION['lastName'] = $row[9];
	        $_SESSION['bu_name'] = $row[11];
	       
	        header("Location: index.php");
	        exit();
	    }
	     $result_auth->close();
    }
     

      
}


?>
