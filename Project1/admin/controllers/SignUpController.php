<?php include '../models/MyValidation.php'; ?>

<?php

    
    $email = "";
    $err_email = "";

    $pass = "";
    $err_pass = "";

    $cpass = "";
    $err_cpass = "";

    $name = "";
    $err_name = "";

    $rentas = "";
    $err_rentas = "";

    $agree = "";
    $err_agree = "";

    $hasError = false;

    if (isset($_POST["signup"])){

        //
        if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "*Required";
		}
		else if(!isEmail($_POST["email"])) {
            $hasError = true;
			$err_email = "*Email is Invalid!";
        }
		else{
			$email = htmlspecialchars($_POST["email"]); ; 
		}
        //
        if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "*Required";
		}
		else if(strlen($_POST["pass"]) < 8){
			$hasError = true;
			$err_pass = "*Minimum 8 Characters!";
		}
        else if(!isStrongPass($_POST["pass"])){
			$hasError = true;
			$err_pass = "*Password Must Contain @/$/!, Combination of Uppercase and Lowercase Character!";
		}
		else{
			$pass = htmlspecialchars($_POST["pass"]); ; 
		}
        //
        if(empty($_POST["cpass"])){
			$hasError = true;
			$err_cpass = "*Required";
		}

		else if(strcmp($_POST["cpass"], $_POST["pass"])){
			$hasError = true;
			$err_cpass = "*Password Doesn't Match!";
		}
		else{
			$cpass = htmlspecialchars($_POST["cpass"]); ; 
		}
        //
        if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "*Required";
		}
		else if(isName($_POST["name"])){
			$hasError = true;
			$err_name = "*Name Should Not Contain Number!";
		}
		else{
			$name = htmlspecialchars($_POST["name"]); ; 
		}
        //
        if(!isset($_POST["rentas"])){
			$hasError = true;
			$err_rentas = "*Required";
		}
		else{
			$rentas = htmlspecialchars($_POST["rentas"]); ; 
		}
        //
        if(empty($_POST["agree"])){
			$hasError = true;
			$err_agree = "*Required";
		}
		else{
			$agree = htmlspecialchars($_POST["agree"]); ; 
		}

        if(!$hasError){
			$rs = Insert($email, $pass, $name, $rentas);
			
			if ($rs === true){
				setcookie("isRegister", "yes", 0, "/");
				header("Location: login.php");
				
			}
			
		}


    }

    function Insert($email, $pass, $name, $rentas){
		$date = 		$date = date("Y-m-d H:i:s");
        $query = "INSERT INTO SIGNUP values (NULL, '$email', '$pass', '$name', '$rentas', 0, '$date', NULL)";
        return execute($query);
    }

	


?>