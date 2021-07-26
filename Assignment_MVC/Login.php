<?php include 'controllers/UserController.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    
</head>
<body>
    <a href="Home.php"><< Home</a>
    <h1>Login Page</h1>
    <form method="POST">
        <caption><?php echo $err_db; ?></caption>
        <table>
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
                <td><input type="submit" value="LOGIN" name="btn_login"></td>
            </tr>
        </table>
    </form>
</body>
</html>