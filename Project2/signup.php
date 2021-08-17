<?php
    include "models/db_config.php";
    include "models/validators.php";
    include "controllers/SignUpController.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .form-default select {
            width: 100%;
        }

        .form-default-btn {
            width: 100%;
            background-color: #FFF;
            border: 1px solid #444;
            padding: 6px 24px;
        }

        .form-default-btn:hover {
            background-color: #444;
            color: #FFF;
            cursor: pointer;
        }
    </style>



    
</head>
<body>
    <?php include "inc/header.php"; ?>
    <br>
    <form class="form-default" onsubmit="return validate();" action="" method="POST">
        <table>
            <tr>
                <td><span>Email*</span></td>
                <td><input id="email" type="text" value="<?php echo $email;?>" name="email"><small id="err_email"><?php echo $err_email;?></small></td>
            </tr>
            <tr>
                <td><span>Password*</span></td>
                <td><input id="pass" type="text" value="<?php echo $pass;?>" name="pass"><small id="err_pass"><?php echo $err_pass;?></small></td>
            </tr>
            <tr>
                <td><span>Confirm Password*</span></td>
                <td><input id="cpass" type="text" value="<?php echo $cpass;?>" name="cpass"><small id="err_cpass"><?php echo $err_cpass;?></small></td>
            </tr>
            <tr>
                <td><span>Name*</span></td>
                <td><input id="name" type="text" value="<?php echo $name;?>" name="name"><small id="err_name"><?php echo $err_name;?></small></td>
            </tr>
            <tr>
                <td><span>Gender*</span></td>
                <td>
                    <input id="male" type="radio" value="Male" name="gender" <?php if(isset($_POST['gender'])) {if($_POST['gender'] == "Male") {echo "checked";}} ?>> Male
                    <input id="female" type="radio" value="Female" name="gender" <?php if(isset($_POST['gender'])) {if($_POST['gender'] == "Female") {echo "checked";}} ?>> Female
                    <br>
                    <small id="err_gender"><?php echo $err_gender;?></small>
                </td>
            </tr>
            <tr>
                <td><span>Signing up as*</span></td>
                <td>
                    <select id="ucategory" name="ucategory" >
                        <option value="#" disabled selected>Select --</option>
                        <option value="renter" <?php if(isset($_POST['ucategory'])) {if($_POST['ucategory'] == "renter") {echo "selected";}} ?>>Renter</option>
                        <option value="rentee" <?php if(isset($_POST['ucategory'])) {if($_POST['ucategory'] == "rentee") {echo "selected";}} ?>>Rentee</option>
                        <option value="manager" <?php if(isset($_POST['ucategory'])) {if($_POST['ucategory'] == "manager") {echo "selected";}} ?>>Manager</option>
                    </select>
                    <br>
                    <small id="err_ucategory"><?php echo $err_ucategory;?></small>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input id="agree" type="checkbox" name="agree" <?php if(isset($_POST['agree'])) {echo "checked";} ?>>I agree
                    <small id="err_agree"><?php echo $err_agree;?></small>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="form-default-btn" type="submit" value="Sign Up" name="btn-signup"></td>
            </tr>
        </table>
    </form>



    <script>
        var hasError = false;

        function get(id) {
            return document.getElementById(id);
        }

        function validate() {
            refresh();
            if(get("email").value == "") {
                hasError = true;
                get("err_email").innerHTML = "-Required!";
            }
            if(get("pass").value == "") {
                hasError = true;
                get("err_pass").innerHTML = "-Required!";
            }

            if(get("cpass").value == "") {
                hasError = true;
                get("err_cpass").innerHTML = "-Required!";
            }
            if(get("name").value == "") {
                hasError = true;
                get("err_name").innerHTML = "-Required!";
            }
            
            if(!get("male").checked && !get("female").checked) {
                hasError = true;
                get("err_gender").innerHTML = "-Required!";
            }

            if(get("name").value == "") {
                hasError = true;
                get("err_name").innerHTML = "-Required!";
            }

            if(get("ucategory").selectedIndex == 0) {
                hasError = true;
                get("err_ucategory").innerHTML = "-Required!";
            }

            if(!get("agree").checked) {
                hasError = true;
                get("err_agree").innerHTML = "-Required!";
            }

            return !hasError;
        }

        function refresh() {
            hasError = false;
            get("err_email").innerHTML = "";
            get("err_pass").innerHTML = "";
            get("err_cpass").innerHTML = "";
            get("err_name").innerHTML = "";
            get("err_ucategory").innerHTML = "";
            get("err_agree").innerHTML = "";
            get("err_gender").innerHTML = "";
        }
    </script>
</body>
</html>