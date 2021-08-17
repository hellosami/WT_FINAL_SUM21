

<?php include 'models/MyValidation.php'; ?>
<?php
    $hasError = false;
    $email = "";
    $err_email = "";

    $pass = "";
    $err_pass = "";

    $cuser = "";
    $err_cuser = "";



	if(isset($_POST["btn-login"])) {
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "*This Field is Required!";
		}
        else if(!isEmail($_POST["email"])) {
            $hasError = true;
			$err_email = "*Email is Invalid!";
        }
		else{
			$email = $_POST["email"];
		}

        if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "*This Field is Required!";
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
			$pass = $_POST["pass"];
		}

        
        if(!isset($_POST["cuser"])){
			$hasError = true;
			$err_cuser = "*This Field is Required!";
		}
		else{
			$cuser = $_POST["cuser"];
		}

  

		if(!$hasError) {
			$rs = Auth($email, $pass, $cuser);

			if ($rs == true){
                
                if($cuser == "renter") {

                    // Creating session
                    /*foreach($rs as $key => $value) {
                        $_SESSION['RID'] = $value['id'];
                        $_SESSION['RID-Email'] = $value['email'];
                    }*/
                    session_start();
                    $_SESSION['RID'] = $rs['id'];
                    $_SESSION['RID-Email'] = $rs['email'];

             

                    header("Location: renter/index.php?btn=1&xl=1&category=MotorBike&email=".$_SESSION['RID-Email'] . "&id=".$_SESSION['RID'] );
                }

                if($cuser == "rentee") {
                       
                  
                        
                        session_start();
                        $_SESSION['RID'] = $rs['id'];
                        $_SESSION['IAMRENTEE'] = $rs['id'];
                         $_SESSION['RID-Email'] = $rs['email'];
                  
                  

                   header("Location: rentee/index.php" );
                }


				
			} else {
                echo "<script>alert('Email/ Password Cant Find!');</script>";
            }
		}


	}

    function Auth($email, $pass, $cuser){


  

            $query = "SELECT * FROM SIGNUP WHERE EMAIL = '$email' && PASS = '$pass' && ucategory = '$cuser';";
            //echo $query;
            $rs = get($query);
            if(count($rs)>0){
                return $rs[0];
            }
            return false;
  
            

        
       
    }

?>