<?php 
    session_start();


?>


<?php
    require_once '../models/db_config.php';
    
    $renterID = $_SESSION['renter-id'];
    $title = "";
    $err_title = "";

    $category = "";
    $err_category = "";
    
    $rate = "";
    $err_rate = "";
        
    $condition = "";
    $err_condition = "";

    $rnumber = "";
    $err_rnumber = "";

    $meter = "";
    $err_meter = "";

    $loc = "";
    $err_loc = "";

    $address = "";
    $err_address = "";

    $contact = "";
    $err_contact = "";
  
    $tc = "";
    $err_tc = "";

    $hasError = false;

    if (isset($_POST["post"])){

        //
        if(empty($_POST["title"])){
			$hasError = true;
			$err_title = "*Required";
		}
		else{
			$title = htmlspecialchars($_POST["title"]); ; 
		}
        //
        if(empty($_POST["category"])){
			$hasError = true;
			$err_category = "*Required";
		}
		else{
			$category = htmlspecialchars($_POST["category"]); ; 
		}
        //
        if(empty($_POST["rate"])){
			$hasError = true;
			$err_rate = "*Required";
		}
		else{
			$rate = htmlspecialchars($_POST["rate"]); ; 
		}
        //
        if(empty($_POST["condition"])){
			$hasError = true;
			$err_condition = "*Required";
		}
		else{
			$condition = htmlspecialchars($_POST["condition"]); ; 
		}
        //
        if(empty($_POST["rnumber"])){
			$hasError = true;
			$err_rnumber = "*Required";
		}
		else{
			$rnumber = htmlspecialchars($_POST["rnumber"]); ; 
		}
        //
        if(empty($_POST["meter"])){
			$hasError = true;
			$err_meter = "*Required";
		}
		else{
			$meter = htmlspecialchars($_POST["meter"]); ; 
		}
        //
        if(empty($_POST["loc"])){
			$hasError = true;
			$err_loc = "*Required";
		}
		else{
			$loc = htmlspecialchars($_POST["loc"]); ; 
		}
        //
        if(empty($_POST["address"])){
			$hasError = true;
			$err_address = "*Required";
		}
		else{
			$address = htmlspecialchars($_POST["address"]); ; 
		}
        //
        if(empty($_POST["contact"])){
			$hasError = true;
			$err_contact = "*Required";
		}
		else{
			$contact = htmlspecialchars($_POST["contact"]); ; 
		}
        //
        if(empty($_POST["tc"])){
			$hasError = true;
			$err_tc = "*Required";
		}
		else{
			$tc = htmlspecialchars($_POST["tc"]); ; 
		}

        if(!$hasError){
			$rs = Insert($renterID, $title, $category, $rate, $condition, $rnumber, $meter, $loc, $address, $contact, $tc);
           var_dump($rs);
			// if ($rs === true){
			// 	header("Location: index.php");
			// }
		}


    }

    function Insert($renterID, $title, $category, $rate, $condition, $rnumber, $meter, $loc, $address, $contact, $tc){
        $query = "INSERT INTO POST_VEHICLE values (NULL, '$renterID', '$title', '$category', '$rate', '$condition', '$rnumber', '$meter', '$loc', '$address', '$contact', '$tc')";
        return execute($query);
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
 


</head>
<body>

<form action="" method="POST">
    <table border="1">
        <tr>
            <td>Post Title*</td>
            <td><input type="text" name="title"> <?php echo $err_title;?></td>
        </tr>
        <tr>
            <td>Vehicle Category*</td>
            <td><input type="text" name="category"> <?php echo $err_category;?></td>
        </tr>
        <tr>
            <td>Rate*</td>
            <td><input type="text" name="rate"> <?php echo $err_rate;?></td>
        </tr>
        <tr>
            <td>Physical Condition*</td>
            <td><input type="text" name="condition"> <?php echo $err_condition;?></td>
        </tr>
        <tr>
            <td>Registration Number*</td>
            <td><input type="text" name="rnumber"> <?php echo $err_rnumber;?></td>
        </tr>
        
        <tr>
            <td>Meter Reading*</td>
            <td><input type="text" name="meter"> <?php echo $err_meter;?></td>
        </tr>

        <tr>
            <td>Location*</td>
            <td><input type="text" name="loc"> <?php echo $err_loc;?></td>
        </tr>

        <tr>
            <td>Address*</td>
            <td><input type="text" name="address"> <?php echo $err_address;?></td>
        </tr>

        <tr>
            <td>Contact Number*</td>
            <td><input type="text" name="contact"> <?php echo $err_contact;?></td>
        </tr>

        <tr>
            <td>Terms and Conditions*</td>
            <td><textarea name="tc" noresize></textarea> <?php echo $err_tc;?></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="post"></td>
        </tr>

    </table>
</form>
   
</body>
</html>