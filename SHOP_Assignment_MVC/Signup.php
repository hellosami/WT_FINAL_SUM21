<?php include 'controllers/UserController.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <a href="Home.php"><< Home</a>
    <h1>Signup Page</h1>
    <form method="POST">
 
        <table>
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="fname" value="<?php echo $fname; ?>"> <?php echo $err_fname; ?></td>
            </tr>

            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" value="<?php echo $uname; ?>"> <?php echo $err_uname; ?></td>
            </tr>

            <tr>
                <td>Password : </td>
                <td><input type="password" name="password" value="<?php echo $pass; ?>"> <?php echo $err_pass; ?></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="SIGNUP" name="btn_sign_up"></td>
            </tr>
        </table>
    </form>
</body>
</html>