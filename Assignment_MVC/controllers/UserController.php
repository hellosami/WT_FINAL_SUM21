<?php
	require_once 'models/db_config.php';
	$fname="";
	$err_fname="";

	$uname="";
	$err_uname="";
	$err_db="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	if(isset($_POST["btn_sign_up"])){
		if(empty($_POST["fname"])){
			$hasError = true;
			$err_fname = "Name Required";
		}
		else{
			$fname = $_POST["fname"];
		}
		
		if(empty($_POST["username"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["username"];
		}

		if(empty($_POST["password"])){
			$hasError = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["password"];
		}


		if(!$hasError){
			$rs = insertUser($fname, $uname, $pass);
			if ($rs === true){
				header("Location: Login.php");
			}
			$err_db = $rs;
		}
	}
    
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["username"];
		}


		if(empty($_POST["password"])){
			$hasError = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["password"];
		}

		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: dashboard.php");
			}
			$err_db = "Username/ Password not valid!";
		}
		
	}
	
	function insertUser($name, $uname, $pass){
		$query = "INSERT INTO registered_users values (NULL,'$name','$uname','$pass')";
		return execute($query);
	}

	function authenticateUser($uname,$pass){
		$query = "SELECT * FROM registered_users WHERE username = '$uname' AND password = '$pass'";

		$result = get($query);
		if(count($result) > 0){
			return true;
		}
		return false;
		
	}
	
	
	
?>