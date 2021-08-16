<?php

    
    $email = "";
    $err_email = "";

    
    $notice = "";
    $err_notice = "";

    $hasError = false;

    if (isset($_POST["notice"])){

        //
        if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "*Required";
		}
		else{
			$email = htmlspecialchars($_POST["email"]); ; 
		}

		if(empty($_POST["notice-text"])){
			$hasError = true;
			$err_notice = "*Required";
		}
		else{
			$notice = htmlspecialchars($_POST["notice-text"]);
		}

		if(!$hasError){
			$rs = Update($email, $notice);
            var_dump($rs);
			/*if ($rs === true){
				header("Location: index.php");
			}*/
		}

    }

	function Update($email, $notice){
        $query = "UPDATE SIGNUP SET NOTICEBYADMIN = '$notice' WHERE EMAIL = '$email'";
        return execute($query);
    }


?>