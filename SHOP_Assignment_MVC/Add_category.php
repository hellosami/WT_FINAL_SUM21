<?php include 'controllers/CategoryControllers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="dashboard.php"> << Go To Dashboard </a>
    <h1>Add Category</h1>
    <form method="POST">
        <caption>
        <?php
            if($msg_db) {
                echo "Category Added";
            } else {
                echo $msg_db;
            }
        ?></caption>
        <table>
            <tr>
                <td>Category Name: </td>
                <td><input type="text" name="category-name" value="<?php echo $category_name; ?>"> <?php echo $err_category_name; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Add Category" name="btn_add"></td>
            </tr>
        </table>
    </form>
</body>
</html>