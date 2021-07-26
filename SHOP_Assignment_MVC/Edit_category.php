<?php include 'controllers/CategoryControllers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="dashboard.php"> << Go To Dashboard </a>
    <h1>Edit Category</h1>
    

    <form method="POST">
        <caption>
        <?php
            if($msg_db) {
                echo "Category Edited";
            } else {
                echo $msg_db;
            }
        ?>
        </caption>

        <table>
            <tr>
                <td>Select Category: </td>
                <td>
                    <select name="category-id">
                        <?php

                        $result = showAllCategories();

                        foreach($result as $key => $value) {
                        echo "<option value='". $value['id'] ."'>". $value['category_name'] ."</option>";
                        }

                        ?>
                    </select>
                </td>
                
            </tr>

            <tr>
                <td>New Category Name: </td>
                <td><input type="text" name="category-name"> <?php echo $err_category_name; ?></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Edit" name="btn_edit"></td>
            </tr>
        </table>
    </form>

</body>
</html>