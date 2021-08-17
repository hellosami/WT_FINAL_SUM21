
<?php

    $email = "";
    $err_email = "";

    $pass = "";
    $err_pass = "";






    $ucategory = "";
    $err_ucategory = "";

    $agree = "";
    $err_agree = "";

    $hasError = false;

    if (isset($_POST["btn-login"])){
        //
        if(empty($_POST["email"])){
            $hasError = true;
            $err_email = "*Required!";
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
            $err_pass = "*Required!";
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
        if(!isset($_POST["ucategory"])){
            $hasError = true;
            $err_ucategory = "*Required!";
        }
        else{
            $ucategory = htmlspecialchars($_POST["ucategory"]); ; 
        }
        //
        if(empty($_POST["agree"])){
            $hasError = true;
            $err_agree = "*Required!";
        }
        else{
            $agree = htmlspecialchars($_POST["agree"]); ; 
        }

        if(!$hasError){
			$rs = Login($email, $pass, $ucategory);
            $SESSION = "";
   
			if ($rs == true){
                echo "found";
                if(count($rs)  > 0) {
                    foreach($rs as $key => $value) {
                        $SESSION = $value["ID"];
                        
                    }
                }
                ECHO $SESSION ;
				//header("Location: ss.php");
			}


           // header("Location: renter_dash.php");
            
		}
    }

    
    function Login($email, $pass, $ucategory) {
        $query = "SELECT ID FROM SIGNUP WHERE EMAIL = '$email' AND PASS = '$pass' AND UCATEGORY = '$ucategory';";
        return get($query);
    }
?>