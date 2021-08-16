
<?php
    require_once '../models/db_config.php';
    require_once '../models/MyValidation.php';
    
	$renter_id = $_SESSION['RID'];
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

    if (isset($_POST["update"])){
		$category = $_POST["category"];
        //
        if(empty($_POST["title"])){
			$hasError = true;
			$err_title = "*Required";
		}
		else{
			
			$title = htmlspecialchars($_POST["title"]); ; 
		}
        //

        //
        if(empty($_POST["rate"])){
			$hasError = true;
			$err_rate = "*Required";
		}
        else if(hasChar($_POST["rate"])){
			$hasError = true;
			$err_rate = "*Numeric Value Only!";
		}
        else if(!($_POST["rate"] >= 50)){
			$hasError = true;
			$err_rate = "*Rate Should Be Greater/Equal Than 50!";
		}
		else{
		
			$rate = htmlspecialchars($_POST["rate"]); ; 
		}
        //
        if(!isset($_POST["condition"])){
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
        else if(hasChar($_POST["rnumber"])){
			$hasError = true;
			$err_rnumber = "*Numeric Value Only!";
		}
        else if(strlen($_POST["rnumber"]) != 6){
			$hasError = true;
			$err_rnumber = "*Registration Number Should Be Equal To 6!";
		}

		else{
	
			$rnumber = htmlspecialchars($_POST["rnumber"]); ; 
		}
        //
        if(empty($_POST["meter"])){
			$hasError = true;
			$err_meter = "*Required";
		}
        else if(hasChar($_POST["meter"])){
			$hasError = true;
			$err_meter = "*Numeric Value Only!";
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
        else if(!isPhoneNumber($_POST["contact"])){
			$hasError = true;
			$err_contact = "*Invalid Phone Number";
		}
        else if(strlen($_POST["contact"]) != 11){
			$hasError = true;
			$err_contact = "*Phone Number Must Be Equal To 11";
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
	
			$rs = Update($title, $category, $rate, $condition, $rnumber, $meter, $loc, $address, $contact, $tc);
    
			if ($rs === true){
       
			    echo "<script>alert('Post Has Been Updated!');</script>";
			}
		}


    }

    function Update($title, $category, $rate, $condition, $rnumber, $meter, $loc, $address, $contact, $tc){
		$query = "UPDATE POST_VEHICLE SET TITLE = '$title', CATEGORY = '$category', RATE = '$rate', PCONDITION = '$condition', RNUMBER = '$rnumber', METER = '$meter', LOC = '$loc', ADDRESS = '$address', CONTACT = '$contact', TC = '$tc' WHERE ID = " . $_GET['id'];
        return execute($query);
    }


?>

