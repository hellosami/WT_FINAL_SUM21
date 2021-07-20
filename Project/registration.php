
<?php include 'models/db_config.php'; ?>
<?php include 'controllers/RegistrationController.php'; ?>
<?php include 'main_header.php'; ?>

<?php echo $db_err; ?>


<style>
    .registration-form-wrapper {
        padding: 12px;
        background-color: #FFF;

        border-radius: 2px;
        border: 1px solid rgb(156, 156, 156);
    }
    
    .registration-form-wrapper input[type="text"],  .registration-form-wrapper input[type="password"]{
        width: 100%;
        height: 24px;

    }
    .registration-form-wrapper textarea {
        resize: none;
        width: 100%;
    }

    .registration-cover-image {
        background-image: url('resources/images/registrationBackground.ac824e2684878bf80ac8883e57fb15d0.jpg');
        background-position-y: 80%;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 300px;
        position: absolute;
        top: 0;
        z-index: -1;
    }
</style>
<div class="main-content-wrapper">
    
    <div class="registration-cover-image"></div>
    <form class="registration-form-wrapper" action="" method="POST">
        <table>
            <caption>Profile Update Form</caption>
            <tr>
                <td>Name</td>
                <td><input type="text" placeholder="" name="name" value="<?php echo $name;?>"> <?php echo $err_name; ?></td>
            </tr>

            <tr>
                <td>NID</td>
                <td><input type="text" placeholder="" name="nid" value="<?php echo $nid;?>"> <?php echo $err_nid; ?></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == "male") {echo "checked";} ?>> Male <br>
                    <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "female") {echo "checked";} ?>> Female <br>
                    <?php echo $err_gender; ?>
                </td>
            </tr>

            <tr>
                <td>Date of Birth</td>
                <td>
                    <select name="dd">
                        <option value="" selected disabled>DD</option>
                        <?php PrintDay(); ?>
                        
                    </select>
                    <?php echo $err_dd; ?>
                    <select name="mm">
                        <option value="" selected disabled>MM</option>
                        <?php PrintMonth(); ?>
                    </select>
                    <?php echo $err_mm; ?>
                    <select name="yy">
                        <option value="" selected disabled>YY</option>
                        <?php PrintYear(); ?>
                    </select>
                    <?php echo $err_yy; ?>
                </td>
            </tr>

            <tr>
                <td>Occupation</td>
                <td><input type="text" placeholder="" name="occupation" value="<?php echo $occupation;?>"> <?php echo $err_occupation; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" placeholder="" name="email" value="<?php echo $email;?>"> <?php echo $err_email; ?></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" placeholder="" name="password" value=""> </td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><input type="password" placeholder="" name="confirm-password" value=""> </td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td>+88 <input type="text" placeholder="" name="phone" value="<?php echo $phone;?>"> <?php echo $err_phone; ?></td>
            </tr>

            <tr>
                <td>Location</td>
                <td>
                    <select name="location">
                        <option value="" selected disabled>Select</option>
                        <?php PrintLocation(); ?>
                    </select>
                    <?php echo $err_location; ?>
                </td>

            </tr>

            <tr>
                <td>Address</td>
                <td><textarea name="address" ><?php echo $address;?></textarea> <?php echo $err_address; ?></td>
            </tr>

        

            <tr>
                <td></td>
                <td><input type="submit" value="Send" name="send-btn"></td>
            </tr>
        </table>

    </form>


</div>

<?php include 'main_footer.php'; ?>