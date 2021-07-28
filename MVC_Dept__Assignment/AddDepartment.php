<?php include 'controllers/DepartmentControllers.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="Dashboard.php"> << Go To Dashboard </a>

    <h1>Add Department</h1>
    <form method="POST">
   
        <caption>
        <?php
            if($msg_db) {
                echo "Department Added!";
            } else {
                echo $msg_db;
            }
        ?></caption>
 
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="dept-name" value="<?php echo $dept_name; ?>"> <?php echo $err_dept_name; ?></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Add Department" style="width: 100%;" name="btn_add_dept"></td>
            </tr>
        </table>
    </form>
</body>
</html>