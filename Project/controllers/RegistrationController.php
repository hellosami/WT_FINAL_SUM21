<?php
    $db_err = "";
    $display = "none";
    $name = "";
    $err_name = "";

    $nid = "";
    $err_nid = "";
    
    $gender = "";
    $err_gender = "";


    

    $dd = "";
    $err_dd = "";

    $mm = "";
    $err_mm = "";

    $yy = "";
    $err_yy = "";


    $occupation = "";
    $err_occupation = "";

    $email = "";
    $err_email = "";


    $phone = "";
    $err_phone = "";

    $location = "";
    $err_location = "";

    $address = "";
    $err_address = "";

    $hasError = false;
   if(isset($_POST['send-btn'])) {

        $name = htmlspecialchars($_POST['name']);
        $nid = htmlspecialchars($_POST['nid']);

        $occupation = htmlspecialchars($_POST['occupation']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
   
        $address = htmlspecialchars($_POST['address']);
    

        function hasNumeric($str) {
            $flag = false;

            foreach(str_split($str) as $c) {
                if(is_numeric($c)) {
                    $flag = true;
                }
            }
    
            return $flag;
        }

        // name
        if(empty($name)) {
            $hasError = true;
            $err_name = "<span><sup>*</sup>Field is empty!</span>";
        }
        else if(hasNumeric($name)) {
            $hasError = true;
            $err_name = "<span><sup>*</sup>Numeric value not allowed!</span>";
        }

        // nid
        if(empty($nid)) {
            $hasError = true;
            $err_nid = "<span><sup>*</sup>Field is empty!</span>";
        }
        else if(!is_numeric($nid)) {
            $hasError = true;
            $err_nid = "<span><sup>*</sup>Must contain numeric value!</span>";
        }
        else if(!(strlen($nid) == 13)) {
            $hasError = true;
            $err_nid = "<span><sup>*</sup>Must be of 13 digits!</span>";
        }

        // gender
        if(!isset($_POST['gender'])) {
            $hasError = true;
            $err_gender= "<span><sup>*</sup>Choose a option!</span>";
        }

        // dob
        // location
        if(!isset($_POST['dd'])) {

            $hasError = true;
            $err_dd= "<span><sup>*</sup>Select a date!</span>";

        }

        if(!isset($_POST['mm'])) {

            $hasError = true;
            $err_mm= "<span><sup>*</sup>Select a month!</span>";

        }

        if(!isset($_POST['yy'])) {

            $hasError = true;
            $err_yy= "<span><sup>*</sup>Select a year!</span>";

        }


        // occupation
        if(empty($occupation)) {
            $hasError = true;
            $err_occupation = "<span><sup>*</sup>Field is empty!</span>";
        }
        else if(hasNumeric($occupation)) {
            $hasError = true;
            $err_occupation = "<span><sup>*</sup>Numeric value not allowed!</span>";
        }


        // email
        if(empty($email)) {
            $hasError = true;
            $err_email = "<span><sup>*</sup>Field is empty!</span>";
        }
        elseif(!strpos($email, '@')) {
            $hasError = true;
            $err_email = "<span><sup>*</sup>Must contain @!</span>";
        }
        elseif(!strpos($email, '.')) {
            $hasError = true;
            $err_email = "<span><sup>*</sup>Must contain .(dot)!</span>";
        }
        elseif(strpos($email, '@') > strpos($email, '.')) {
            $hasError = true;
            $err_email = "<span><sup>*</sup>Must contain @ and at least one .(dot) after @!</span>";
        }


        // phone number
        if(empty($phone)) {
            $hasError = true;
            $err_phone = "<span><sup>*</sup>Field is empty!</span>";
        }
        else if(!is_numeric($phone)) {
            $hasError = true;
            $err_phone = "<span><sup>*</sup>Must contain numeric value!</span>";
        }
        else if(!(strlen($phone) == 11)) {
            $hasError = true;
            $err_phone = "<span><sup>*</sup>Must be of 11 digits!</span>";
        }

        // location
        if(!isset($_POST['location'])) {

            $hasError = true;
            $err_location= "<span><sup>*</sup>Select a option!</span>";

        }




        // address
        if(empty($address)) {
            $hasError = true;
            $err_address = "<span><sup>*</sup>Field is empty!</span>";
        }
        
        //
        
        if(!$hasError) {

            $gender = $_POST['gender'];
            $location = $_POST['location'];
            $dob = $_POST['dd'] . '/' .  $_POST['mm'] . '/' . $_POST['yy'];

            $query = "insert into users values (NULL, '$email', '$pass', '$name', '$nid', '$gender', '$dob', '$occupation', '$phone', '$location', '$address')";
            $res = execute($query);
            if($res === true) {
                header('Location: index.php');
            } else {
                $db_err = $res;
            }
        }

   }

   function insertUser(){

        
    }


   function PrintYear() {

    for($i = (int) date("Y"); $i >= 1999; $i--) {
        
        

        if($_POST['yy'] == $i) {
            echo "<option value='$i' selected>". $i ."</option>";
        }  else {
            echo "<option value='$i' >". $i ."</option>";
        }
    }
}

function PrintDay() {
   
    for($i = 1; $i <= 31; $i++) {

        if($_POST['dd'] == $i) {
            echo "<option value='$i' selected>". $i ."</option>";
        } else {
            echo "<option value='$i'>". $i ."</option>";
        }
    }
}

function PrintMonth() {
    $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
    foreach($months as $m) {

        
        if($_POST['mm'] == $m) {
            echo "<option value='$m' selected>$m</option>";
        } else {
            echo "<option value='$m'>$m</option>";
        }
       
    }
}


function PrintLocation() {
    $locations = array("Adabor", "Uttar Khan", "Uttara", "Kadamtali", "Kalabagan");
    foreach($locations as $l) {

    if($_POST['location'] == $l) {
        echo "<option value='$l' selected>$l</option>";
    }
     else {
            echo "<option value='$l'>$l</option>";
        
    
    }
    }
}
?>