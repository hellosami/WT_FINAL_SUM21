<?php
	require_once 'models/db_config.php';
	require_once 'models/my_validation.php';

	$fname="";
	$err_fname="";

	$uname="";
	$err_uname="";
	$err_db="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	if (isset($_POST["btn_login"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_uname = "Username Required!";
		}
		else if(hasWhiteSpace($_POST["username"])){
			$hasError = true;
			$err_uname = "Space Not Allowed!";
			
		}
		else if(strlen($_POST["username"]) < 4) {
			$hasError = true;
			$err_uname = "Minimum Length 4 Characters!";
		}
		else{
			$uname = $_POST["username"];
		}

	


		if(empty($_POST["password"])){
			$hasError = true;
			$err_pass = "Password Required!";
		}
		else if(strlen($_POST["password"]) < 8) {
			$hasError = true;
			$err_pass = "Minimum Length 8 Characters!";
		}
		else{
			$pass = $_POST["password"];
		}

		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: Dashboard.php");
			}
			else { 
				$err_db = "Username/ Password NOT Valid!";
			}
		}
		
	}

	function authenticateUser($uname,$pass){
		$query = "SELECT * FROM admin WHERE username = '$uname' AND password = '$pass'";

		$result = get($query);
		if(count($result) > 0){
			return true;
		}
		return false;
		
	}
	
	
	
?>