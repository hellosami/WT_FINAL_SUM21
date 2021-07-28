<?php include 'controllers/StudentControllers.php'; ?>
<?php include 'controllers/DepartmentControllers.php'; ?>
<?php

        $result = showDepartmentById($_GET['id']);
        $id = "";
        $name = "";

        foreach($result as $key => $value) {

            $id = $value['id'];
            $name = $value['name'];
        }

    ?>




<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="dashboard.php"> << Go To Dashboard </a>
    <h1>Edit Department</h1>
    

    <form method="POST">
        <caption>
            <?php 
                    echo $msg_db;
            ?>
        </caption>

        <table>
            <tr>
                <td>Student ID: </td>
                <td>
            
                        <?php



                        foreach($result as $key => $value) {
                            echo "<input type='text' name='id' value='". $id ."' readonly> (Read Only)";
                        }

                        ?>

          
                </td>
                
                    
            </tr>

            <tr>
                <td>Department Name: </td>
                <td><input type="text" name="dept-name" value="<?php echo $name; ?>"> <?php echo $err_name; ?></td>
            </tr>

 
            <tr>
                <td></td>
                <td><br><input type="submit" value="Edit" name="btn_edit_dept" style="width: 100%;"></td>
            </tr>
        </table>
    </form>

</body>
</html>