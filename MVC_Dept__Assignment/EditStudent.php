<?php include 'controllers/StudentControllers.php'; ?>
<?php include 'controllers/DepartmentControllers.php'; ?>
<?php

        $result = showStudentById($_GET['id']);
        $id = "";
        $name = "";
        $dob = "";
        $credit = "";
        $cgpa = "";
        $dept_id = "";

        foreach($result as $key => $value) {

            $id = $value['id'];
            $name = $value['name'];
            $dob = $value['dob'];
            $credit = $value['credit'];
            $cgpa = $value['cgpa'] ;
            $dept_id = $value['dept_id'] ;
        }

    ?>




<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="dashboard.php"> << Go To Dashboard </a>
    <h1>Edit Student</h1>
    

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
                <td>Department: </td>
                <td>
                        <select name="dept" >
                        <?php

                            $result = showAllDeparments();



                            foreach($result as $key => $value) {
                                if($value['id'] == $dept_id) {
                                    echo "<option value='". $value['id'] ."' selected >". $value['name'] ."</option>";
                                } else {
                                    echo "<option value='". $value['id'] ."'  >". $value['name'] ."</option>";
                                }
                                
                            }

     

                        ?>
                        </select>
                        
                        <?php echo $err_dept; ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><br><input type="submit" value="Edit" name="btn_edit" style="width: 100%;"></td>
            </tr>
        </table>
    </form>

</body>
</html>