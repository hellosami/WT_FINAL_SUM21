<?php
    require_once '../models/db_config.php';
    
    $email = "";
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
			$rs = Update($email, $pass, $name);
            var_dump($rs);
			/*if ($rs === true){
				header("Location: index.php");
			}*/
		}


    }

    /*
    UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; 
    */
    function Update($email, $pass, $name){
        $query = "UPDATE SIGNUP SET EMAIL = '$email', PASS = '$pass', NAME = '$name' WHERE ID ='". $_GET['id'] ."';";
        return execute($query);
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <style>
       
        
    </style>


</head>
<body>

<form action="" method="POST">
    <table border="1">
        <tr>
            <td>Email*</td>
            <td><input type="text" name="email"> <?php echo $err_email;?></td>
        </tr>
        <tr>
            <td>Password*</td>
            <td><input type="text" name="pass"> <?php echo $err_pass;?></td>
        </tr>
        <tr>
            <td>Confirm Password*</td>
            <td><input type="text" name="cpass"> <?php echo $err_cpass;?></td>
        </tr>
        <tr>
            <td>Name*</td>
            <td><input type="text" name="name"> <?php echo $err_name;?></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="agree">I have read and I agree to the GoRent <a href="">Terms and Conditions</a> <?php echo $err_agree;?></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update"></td>
        </tr>

    </table>
</form>
   
</body>
</html>