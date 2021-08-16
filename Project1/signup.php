

<?php include 'models/db_config.php';?>

<?php include 'controllers/SignUpController.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Company</title>

    <script>



    </script>
    <script>
        var hasError = false;

        function get(id) {
            return document.getElementById(id);
        }

        function validate() {
            refresh();
            if(get("email").value == "") {
                hasError = true;
                get("err_email").innerHTML = "- Required!";
            }
            if(get("pass").value == "") {
                hasError = true;
                get("err_pass").innerHTML = "- Required!";
            }

            if(get("cpass").value == "") {
                hasError = true;
                get("err_cpass").innerHTML = "- Required!";
            }
            if(get("name").value == "") {
                hasError = true;
                get("err_name").innerHTML = "- Required!";
            }

            if(get("rentas").selectedIndex == 0) {
                hasError = true;
                get("err_rentas").innerHTML = "- Required!";
            }

            if(!get("agree").checked) {
                hasError = true;
                get("err_agree").innerHTML = "- Required!";
            }

            return !hasError;
        }

        function refresh() {
            hasError = false;
            get("err_email").innerHTML = "";
            get("err_pass").innerHTML = "";
            get("err_cpass").innerHTML = "";
            get("err_name").innerHTML = "";
            get("err_rentas").innerHTML = "";
            get("err_agree").innerHTML = "";
        }
    </script>
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            <form method="POST" onsubmit="return validate();">
                <table >
                    <tr>
                        <td>Email*</td>
                        <td><input id="email" type="text" value="<?php echo $email;?>" name="email"> <span id="err_email"></span><?php echo $err_email;?></td>
                    </tr>
                    <tr>
                        <td>Password*</td>
                        <td><input type="password" value="<?php echo $pass;?>" name="pass" id="pass"> <span id="err_pass"></span> <?php echo $err_pass;?></td>
                    </tr>
                    <tr>
                        <td>Confirm Password*</td>
                        <td><input type="password" value="<?php echo $cpass;?>" name="cpass" id="cpass"> <span id="err_cpass"></span> <?php echo $err_cpass;?></td>
                    </tr>
        

                    <tr>
                        <td>Name*</td>
                        <td><input type="text" value="<?php echo $name;?>" name="name" id="name"> <span id="err_name"></span> <?php echo $err_name;?></td>
                    </tr>
                    <tr>
                        <td>Signing up as *</td>
                        <td>
                            <select id="rentas" name="rentas" >
                                <option value="#" disabled selected>Select --</option>
                                <option value="renter" <?php if(isset($_POST['rentas'])) { if($_POST['rentas'] == "renter") {echo "selected";}} ?>>Renter</option>
                                <option value="rentee" <?php if(isset($_POST['rentas'])) { if($_POST['rentas'] == "rentee") {echo "selected";}} ?>>Rentee</option>
                            </select><span id="err_rentas"></span>  <?php echo $err_rentas;?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" id="agree" name="agree"> I'm Not a Robot <span id="err_agree"></span> <?php echo $err_agree;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><input class="default-btn" type="submit" name="signup" value="SignUP"></td>
                    </tr>
                </table>
            </form>
            
        </div>
    </div>
   

</body>
</html>