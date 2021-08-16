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

    if (isset($_POST["signup-manager"])){

        //
        if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "*Required";
		}
		else{
			$email = htmlspecialchars($_POST["email"]); ; 
		}
        //
        if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "*Required";
		}
		else{
			$pass = htmlspecialchars($_POST["pass"]); ; 
		}
        //
        if(empty($_POST["cpass"])){
			$hasError = true;
			$err_cpass = "*Required";
		}
		else{
			$cpass = htmlspecialchars($_POST["cpass"]); ; 
		}
        //
        if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "*Required";
		}
		else{
			$name = htmlspecialchars($_POST["name"]); ; 
		}
        //
     
        //
        if(empty($_POST["agree"])){
			$hasError = true;
			$err_agree = "*Required";
		}
		else{
			$agree = htmlspecialchars($_POST["agree"]); ; 
		}

        if(!$hasError){
			$rs = Insert($email, $pass, $name);
            var_dump($rs);
			/*if ($rs === true){
				header("Location: index.php");
			}*/
		}


    }

    function Insert($email, $pass, $name){
		$date = date("Y-m-d H:i:s");
        $query = "INSERT INTO MANAGER values (NULL, '$email', '$pass', '$name', '$date')";
        return execute($query);
    }


?>