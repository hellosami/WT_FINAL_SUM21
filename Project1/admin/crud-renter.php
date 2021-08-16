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
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            <!-- Update -->
            <span>UPDATE USER</span>
            
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
                                <td><input type="submit" name="update"></td>
                            </tr>
                        </table>
                </form>

            <!-- Create -->
            <span>CREATE USER</span>
            
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

                <!-- Delete -->
            <span>DELETE USER</span>
            
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