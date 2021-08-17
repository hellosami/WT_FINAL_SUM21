
<?php
    require_once '../models/db_config.php';
    require_once '../models/MyValidation.php';




	if(isset($_SESSION['RID'])) {
	//	$renter_id = $_SESSION['RID'];
	$renter_id = $_SESSION['RID'];
	}

    $title = "";
    $err_title = "";

 
    if(isset($_GET['category'])) {
        $category = $_GET['category'];
    }
    

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
	
		$date = date("Y-m-d H:i:s");
			$rs = Insert($renter_id, $title, $category, $rate, $condition, $rnumber, $meter, $loc, $address, $contact, $tc, $date);

			if ($rs === true){
       
			    echo "<script>alert('Congratulation! Your Post Has Been Submitted!');</script>";
			}
		}


    }

    function Insert($renter_id, $title, $category, $rate, $condition, $rnumber, $meter, $loc, $address, $contact, $tc, $date){
        $query = "INSERT INTO POST_VEHICLE values (NULL, '$renter_id', '$title', '$category', '$rate', '$condition', '$rnumber', '$meter', '$loc', '$address', '$contact', '$tc', '$date')";
        return execute($query);
    }


?>

<?php

    function searchPosts($key) {
        $query = "SELECT * FROM POST_VEHICLE WHERE TITLE like '%$key%'";
        $rs = get($query);
        return $rs;
    }

    function GetPosts($key){
        $query = "SELECT * FROM POST_VEHICLE WHERE TITLE like '%$key%'";
        return get($query);
    }

    function GetPostsByID($ID){
        $query = "SELECT * FROM POST_VEHICLE WHERE RENTER_ID = '$ID';";
        return get($query);
    }

	function GetPostedByID($ID){
        $query = "SELECT * FROM POST_VEHICLE WHERE ID = '$ID';";
        return get($query);
    }
	
	function GetTotalCost($ID) {
		$query = "SELECT * FROM signup Where ID= '$ID';";
        return get($query);
	}

	function GetRequestsByID($ID){
        $query = "SELECT post_vehicle.title, post_vehicle.rate, post_vehicle.contact, requests.rentee_id, requests.renter_id, requests.id
		FROM post_vehicle
		INNER JOIN requests ON requests.renter_id=post_vehicle.renter_id AND requests.post_id=post_vehicle.id AND requests.status = 0;";
        return get($query);
    }

	function GetRequestsByIDRENTEE($ID){
        $query = "SELECT post_vehicle.title, post_vehicle.contact, post_vehicle.rate, requests.rentee_id, requests.renter_id, requests.id
		FROM post_vehicle 

		INNER JOIN requests ON requests.renter_id=post_vehicle.renter_id AND requests.post_id=post_vehicle.id AND requests.status = 1 AND requests.rentee_id = $ID;";
        return get($query);
    }
	
	function GetRequestsIncomeByID($ID){
        $query = "SELECT post_vehicle.title, post_vehicle.rate, post_vehicle.insertedDate, requests.rentee_id, requests.renter_id, requests.id
		FROM post_vehicle
		INNER JOIN requests ON requests.renter_id=post_vehicle.renter_id AND requests.post_id=post_vehicle.id AND requests.status = 1 AND requests.renter_id = $ID ;";
        return get($query);
    }




?>