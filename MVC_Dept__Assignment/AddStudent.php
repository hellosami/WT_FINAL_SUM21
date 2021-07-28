<?php include 'controllers/DepartmentControllers.php'; ?>
<?php include 'controllers/StudentControllers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="Dashboard.php"> << Go To Dashboard </a>

    <h1>Add Student</h1>
    <form method="POST">
   
        <caption>
        <?php
            if($msg_db) {
                echo "Student Added!";
            } else {
                echo $msg_db;
            }
        ?></caption>
 
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"> <?php echo $err_name; ?></td>
            </tr>

            <tr>
                <td>DOB: </td>
                <td><input type="text" name="dob" value="<?php echo $dob; ?>"> <?php echo $err_dob; ?></td>
            </tr>

            <tr>
                <td>Credit: </td>
                <td><input type="text" name="credit" value="<?php echo $credit; ?>"> <?php echo $err_credit; ?></td>
            </tr>

            <tr>
                <td>CGPA: </td>
                <td><input type="text" name="cgpa" value="<?php echo $cgpa; ?>"> <?php echo $err_cgpa; ?></td>
            </tr>

            <tr>
                <td>DEPT: </td>
                <td>

                    <select name="dept" >
                        <?php

                            $result = showAllDeparments();
                            foreach($result as $key => $value) {
                                echo "<option value='". $value['id'] ."'  >". $value['name'] ."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>



            <tr>
                <td></td>
                <td><input type="submit" value="Add Student" style="width: 100%;" name="btn_add"></td>
            </tr>
        </table>
    </form>
</body>
</html>