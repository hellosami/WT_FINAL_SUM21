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

	
    if (isset($_POST["update-manager"])){

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
			
			$rs = UpdateManager($email, $pass, $name);
            var_dump($rs);
			/*if ($rs === true){
				header("Location: index.php");
			}*/
		}


    }

    function UpdateManager($email, $pass, $name){
		
        $query = "UPDATE MANAGER SET PASS = '$pass', NAME = '$name' WHERE EMAIL = '$email'";
        return execute($query);
    }


?>