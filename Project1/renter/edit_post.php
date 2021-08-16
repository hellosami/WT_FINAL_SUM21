
<?php session_start(); ?>
<?php include '../models/db_config.php';?>
<?php include 'includes/GetUsers.php';?>
<?php include '../controllers/UpdatePostController.php';?>
<?php include '../controllers/PostController.php';?>
<?php
$ttitle = "";
$tcategory = "";
$trate = "";
$tcondition = "";
$trnumber = "";
$tmeter = "";
$tloc = "";
$taddress = "";
$tphone = "";
$ttc = "";
                    $result = GetPostsByID($_SESSION['RID']);

                    if(count($result)  > 0) {
                        foreach($result as $key => $value) {

                            $ttitle = $value['title'];
                            $tcategory = $value['category'];
                            $trate = $value['rate'];
                            $tcondition = $value['pcondition'];
                            $trnumber = $value['rnumber'];
                            $tmeter = $value['meter'];
                            $tloc = $value['loc'];
                            $taddress = $value['address'];
                            $tphone = $value['contact'];
                            $ttc = $value['tc'];
                        }
                    }
?>


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
        <form action="" method="POST">
                <table>
                    <tr>
                        <td>Post Title*</td>
                        <td><input type="text" name="title" value="<?php echo $ttitle;?>"> <?php echo $err_title;?></td>
                    </tr>
                    <tr>
                        <td>Vehicle Category*</td>
                        <td><input style="color: gray;" type="text" name="category" value="<?php echo $tcategory; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Rate*</td>
                        <td><input type="text" name="rate" value="<?php echo $trate;?>"> <?php echo $err_rate;?></td>
                    </tr>
                    <tr>
                        <td>Physical Condition*</td>
 

                        <td>
                            <select name="condition" >
                                <option value="Excellent" <?php if($tcondition == "Excellent") {echo "selected";} ?>>Excellent</option>
                                <option value="Good" <?php if($tcondition == "Good") {echo "selected";} ?>>Good</option>
                                <option value="Medium" <?php if($tcondition == "Medium") {echo "selected";} ?>>Medium</option>
                            </select> <?php echo $err_condition;?>
                        </td>
                    </tr>
                    <tr>
                        <td>Registration Number*</td>
                        <td><input type="text" name="rnumber" value="<?php echo $trnumber;?>"> <?php echo $err_rnumber;?></td>
                    </tr>
                    
                    <tr>
                        <td>Meter Reading*</td>
                        <td><input type="text" name="meter" value="<?php echo $tmeter;?>"> <?php echo $err_meter;?></td>
                    </tr>

                    <tr>
                        <td>Location*</td>
                        <td><input type="text" name="loc" value="<?php echo $tloc;?>"> <?php echo $err_loc;?></td>
                    </tr>

                    <tr>
                        <td>Address*</td>
                        <td><input type="text" name="address" value="<?php echo $taddress;?>"> <?php echo $err_address;?></td>
                    </tr>

                    <tr>
                        <td>Contact Number*</td>
                        <td><input type="text" name="contact" value="<?php echo $tphone;?>"> <?php echo $err_contact;?></td>
                    </tr>

                    <tr>
                        <td>Terms and Conditions*</td>
                        <td><textarea name="tc" style="resize: none;height: 100px;width: 300px;"><?php echo $ttc;?></textarea> <?php echo $err_tc;?></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><br><input style="padding: 6px;" class="default-btn"  name="update" type="submit" value="Update"></td>
                 
                    </tr>

                </table>
                </form>
        </div>
    </div>
   

</body>
</html>