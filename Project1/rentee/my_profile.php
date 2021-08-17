
<?php session_start(); ?>
<?php include '../models/db_config.php';?>
<?php include 'includes/GetUsers.php';?>
<?php include '../controllers/UpdateRenteeController.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Renter Dashboard</title>
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            
        
        <?php

            $key =  $_SESSION['RID'] ;
            $result = GetUserInfoByID($key);

            if(count($result)  > 0) {
                foreach($result as $key => $value) {
                    $temail1 = $value['email'];
                    echo "
                        Name: ". $value['name'] ."<br>
                        Email: ". $value['email'] ."<br>
                        Rent As: ". $value['ucategory'] ."<br>
                        Enrollment: ". $value['enrollment'] ."
                    ";

                }
            }
        ?>
            
        </div>

        <div>
            <form method="POST">
                <table >
                    <tr>
                        <td>Email*</td>
                        <td><input type="text" value="<?php echo  $temail1;?>"  disabled></td>
                        
                    </tr>
                    <tr>
                        <td>Password*</td>
                        <td><input type="text" value="<?php echo $pass;?>" name="pass"> <?php echo $err_pass;?></td>
                    </tr>
                    <tr>
                        <td>Confirm Password*</td>
                        <td><input type="text" value="<?php echo $cpass;?>" name="cpass"> <?php echo $err_cpass;?></td>
                    </tr>
                    <tr>
                        <td>Name*</td>
                        <td><input type="text" value="<?php echo $name; ?>" name="name"> <?php echo $err_name;?></td>
                    </tr>
  
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="agree"> I'm Not a Robot <?php echo $err_agree;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><input style="padding: 6px;" class="default-btn" type="submit" name="update" value="Update Profile"></td>

                    </tr>
                </table>
            </form>
        </div>
    </div>
   

</body>
</html>