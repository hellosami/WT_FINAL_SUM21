
<?php


   	include '../models/MyValidation.php';
    $email = $_SESSION['RID-Email'];
    $err_email = "";

    $pass = "";
    $err_pass = "";

    $cpass = "";
    $err_cpass = "";

    $name = "";
    $err_name = "";

   

    $agree = "";
    $err_agree = "";

    $hasError = false;

    if (isset($_POST["update"])){
		
      
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
        
        //
        if(empty($_POST["agree"])){
			
			$hasError = true;
			$err_agree = "*Required";
		}
		else{

			$agree = htmlspecialchars($_POST["agree"]); ; 
		}

        if(!$hasError){
			
			$rs = Update($email, $pass, $name);
			if ($rs == true){
				header("Location: ../login.php");
			}
		}


    }

    function Update($email, $pass, $name){

        $query = "UPDATE SIGNUP SET PASS = '$pass', NAME = '$name' WHERE EMAIL = '$email'";
		//var_dump($query);
       return execute($query);
    }


?>