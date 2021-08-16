
<?php session_start(); ?>
<?php include '../models/db_config.php';?>
<?php include '../controllers/PostController.php';?>
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

        <?php include 'includes/header.php'; 
      
       

        
        ?>

        <br>

        <div class="content-wrapper">
   
            <div class="btn-xl-container">
                <div class="btn-xl <?php if($_GET['xl'] == '1') {echo "xlactive";} ?>" onclick="location.href='?btn=1&xl=1&category=MotorBike';document.getElementById('cat').value = 'MotorBike';"><img src="image/icons/riding-fill.svg" alt=""></div>
                <div class="btn-xl <?php if($_GET['xl'] == '2') {echo "xlactive";} ?>" onclick="location.href='?btn=1&xl=2&category=Car';document.getElementById('cat').value = 'Car';"><img src="image/icons/roadster-fill.svg" alt=""></div>
                <div class="btn-xl <?php if($_GET['xl'] == '3') {echo "xlactive";} ?>" onclick="location.href='?btn=1&xl=3&category=Truck';document.getElementById('cat').value = 'Truck';"><img src="image/icons/truck-line.svg" alt=""></div>
            </div>
            
            <br>
            <br>
            <div>

            <form id="postForm" action="" method="POST">
                <table>
                    <tr>
                        <td>Post Title*</td>
                        <td><input type="text" name="title" value="<?php echo $title;?>"> <?php echo $err_title;?></td>
                    </tr>
                    <tr>
                        <td>Vehicle Category*</td>
                        <td><input id="cat" type="text" name="category" value="<?php echo $_GET['category']; ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Rate*</td>
                        <td><input type="text" name="rate" value="<?php echo $rate;?>"> <?php echo $err_rate;?></td>
                    </tr>
                    <tr>
                        <td>Physical Condition*</td>
 

                        <td>
                            <select name="condition" >
                                <option value="#" disabled selected>Select --</option>
                                <option value="Excellent" <?php if(isset($_POST['condition'])) { if($_POST['condition'] == "Excellent") {echo "selected";}} ?>>Excellent</option>
                                <option value="Good" <?php if(isset($_POST['condition'])) { if($_POST['condition'] == "Good") {echo "selected";}} ?>>Good</option>
                                <option value="Medium" <?php if(isset($_POST['condition'])) { if($_POST['condition'] == "Medium") {echo "selected";}} ?>>Medium</option>
                            </select> <?php echo $err_condition;?>
                        </td>
                    </tr>
                    <tr>
                        <td>Registration Number*</td>
                        <td><input type="text" name="rnumber" value="<?php echo $rnumber;?>"> <?php echo $err_rnumber;?></td>
                    </tr>
                    
                    <tr>
                        <td>Meter Reading*</td>
                        <td><input type="text" name="meter" value="<?php echo $meter;?>"> <?php echo $err_meter;?></td>
                    </tr>

                    <tr>
                        <td>Location*</td>
                        <td><input type="text" name="loc" value="<?php echo $loc;?>"> <?php echo $err_loc;?></td>
                    </tr>

                    <tr>
                        <td>Address*</td>
                        <td><input type="text" name="address" value="<?php echo $address;?>"> <?php echo $err_address;?></td>
                    </tr>

                    <tr>
                        <td>Contact Number*</td>
                        <td><input type="text" name="contact" value="<?php echo $contact;?>"> <?php echo $err_contact;?></td>
                    </tr>

                    <tr>
                        <td>Terms and Conditions*</td>
                        <td><textarea name="tc" style="resize: none;height: 100px;width: 300px;"><?php echo $tc;?></textarea> <?php echo $err_tc;?></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><br><input style="padding: 6px;" class="default-btn" type="submit" name="post" value="POST RENT"> <button style="padding: 6px;" class="default-btn" onclick="document.getElementById('postForm').reset();" type="button" >RESET<button></td>
                 
                    </tr>

                </table>
                </form>
            </div>
        </div>
    </div>
   

      
</body>
</html>