
<?php include 'models/db_config.php'; ?>
<?php include 'controllers/LoginController.php'; ?>
<?php include 'main_header.php'; ?>

<?php echo $db_err; ?>

<div class="main-content-wrapper">
    
    <form action="" method="POST">
        <table border="1">
            <caption>Login</caption>
            <tr>
                <td>Email</td>
                <td><input type="text" name="username" placeholder="john" value="<?php echo $username; ?>">  <?php echo $err_username; ?></td>
                
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="********" value="<?php echo $password; ?>">  <?php echo $err_password; ?></td>
                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" name="login-btn"></td>
            </tr>
        </table>
    </form>


</div>

<?php include 'main_footer.php'; ?>