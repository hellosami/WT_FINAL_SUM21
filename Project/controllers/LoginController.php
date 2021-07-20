<?php
        $hasError = false;
        $db_err = "";
        $username = "";
        $err_username = "";

        $password = "";
        $err_password = "";


        function hasOneNumber($str) {
            $number_counter = 0;
            foreach(str_split($str) as $p) {
                if(is_numeric($p)) {
                    $number_counter++;
                }
            }
    
            return $number_counter;
        }
    
        function hasUpperCase($str) {
            $flag = false;
            foreach(str_split($str) as $p) {
                if(ctype_upper($p)) {
                    $flag = true;
                    break;
                }
            }
    
            return $flag;
        }
    
        function hasLowerCase($str) {
            $flag = false;
            foreach(str_split($str) as $p) {
                if(ctype_lower($p)) {
                    $flag = true;
                    break;
                }
            }
    
            return $flag;
        }

        

        if(isset($_POST['login-btn'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            

            if(empty($username)) {
                $hasError = true;
                $err_username = "<span><sup>*</sup>Field is empty!</span>";
            }
            // whitespace checking
            else if(count(explode(" ", $username)) > 1) {
                $hasError = true;
                $err_username = "<span><sup>*</sup>Username must not contain whitespace!</span>";
            }


            // password
            /*if(empty($password)) {
                $hasError = true;
                $err_password = "<span><sup>*</sup>Field is empty!</span>";
            }
    
            else if(strlen($password) < 8 ) {
                $hasError = true;
                $err_password = "<span><sup>*</sup>Password must contain at least 8 character!</span>";
            }

    
            elseif(!(hasUpperCase($password) && hasLowerCase($password))) {
            
                $hasError = true;
                $err_password = "<span><sup>*</sup>Must contain combination of uppercase and lowercase!</span>";
            }*/

            if(!$hasError) {
                if(authenticateUser($username, $password)){
                    header("Location: dashboard.php");
                }
                $db_err = "Username/password invalid";
            }
        }


        function authenticateUser($username, $password) {
            $query = "select * from users where user_email='$username' and user_pass='$password'";
            $rs = get($query);
            if(count($rs)>0){
                return true;
            }
            return false;
        }


?>