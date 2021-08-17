<?php require_once '../models/db_config.php'; ?>

<?php require_once 'controllers/SignUpController.php'; ?>
<?php require_once 'controllers/UpdateController.php'; ?>
<?php require_once 'controllers/DeleteController.php'; ?>
<?php require_once 'includes/GetUsers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin Dashboard</title>

    <script>
        var hasError = false;

        function get(id) {
            return document.getElementById(id);
        }

        function validate1() {
            refresh1();
            if(get("pass1").value == "") {
                hasError = true;
                get("err_pass1").innerHTML = "- Required!";
            }
       

            if(get("cpass1").value == "") {
                hasError = true;
                get("err_cpass1").innerHTML = "- Required!";
            }
            if(get("name1").value == "") {
                hasError = true;
                get("err_name1").innerHTML = "- Required!";
            }

          /*  if(get("rentas").selectedIndex == 0) {
                hasError = true;
                get("err_rentas").innerHTML = "- Required!";
            }*/

            if(!get("agree1").checked) {
                hasError = true;
                get("err_agree1").innerHTML = "- Required!";
            }

            return !hasError;
        }

        function refresh1() {
            hasError = false;
            get("err_pass1").innerHTML = "";
            get("err_cpass1").innerHTML = "";
            get("err_name1").innerHTML = "";
            get("err_agree1").innerHTML = "";

        }
    </script>
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            <!-- Update -->
            <span style="color: white; margin: 8px; padding: 8px;background-color: blue;">UPDATE USER</span>
            <br><br>
            <form method="POST" onsubmit="return validate1();">
                        <table >
                            <tr>
                                <td>Email*</td>
                                <td>
                                
                                    <select name="email" id="">

                                    
                                    <?php
                                    $key = $_GET["key"];
                                    $result = GetUsers($key);

                                    if(count($result)  > 0) {
                                        foreach($result as $key => $value) {
                                            ?>
                                        <option value="<?php echo $value['email']; ?>"><?php echo $value['email']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                
                                
                                <?php echo $err_email;?>
                                </td>
                            </tr>
                            <tr>
                                <td>Password*</td>
                                <td><input id="pass1" type="text" name="pass"><span id="err_pass1"></span> <?php echo $err_pass;?></td>
                            </tr>
                            <tr>
                                <td>Confirm Password*</td>
                                <td><input id="cpass1" type="text" name="cpass"><span id="err_cpass1"> <?php echo $err_cpass;?></td>
                            </tr>
                            <tr>
                                <td>Name*</td>
                                <td><input id="name1" type="text" name="name"><span id="err_name1">  <?php echo $err_name;?></td>
                            </tr>
       
                            <tr>
                                <td></td>
                                <td><input id="agree1" type="checkbox" name="agree"> I'm Not a Robot <span id="err_agree1">  <?php echo $err_agree;?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="update"></td>
                            </tr>
                        </table>
                </form>
                <br><br>
            <!-- Create -->
            <span style="color: white; margin: 8px; padding: 8px;background-color: green;">CREATE USER</span>
            <br><br>
            
            <form method="POST">
                        <table >
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
                                <td>Signing up as *</td>
                                <td>
                                    <select name="rentas" >
                                        <option value="">Select --</option>
                                        <option value="renter">Renter</option>
                                        <option value="rentee">Rentee</option>
                                    </select> <?php echo $err_rentas;?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="agree"> I'm Not a Robot <?php echo $err_agree;?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="signup"></td>
                            </tr>
                        </table>
                </form>
                <br><br>
                <!-- Delete -->
                <span style="color: white; margin: 8px; padding: 8px;background-color: red;">DELETE USER</span>
            <br><br>
            
            <form method="POST">
                        <table >
                            <tr>
                                <td>Email*</td>
                                <td>
                                
                                    <select name="email" id="">

                                    
                                    <?php
                                    $key = $_GET["key"];
                                    $result = GetUsers($key);

                                    if(count($result)  > 0) {
                                        foreach($result as $key => $value) {
                                            ?>
                                        <option value="<?php echo $value['email']; ?>"><?php echo $value['email']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                
                                
                                <?php echo $err_email;?>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" name="delete"></td>
                            </tr>
                        </table>
                </form>
            
        </div>
    </div>
   

</body>
</html>