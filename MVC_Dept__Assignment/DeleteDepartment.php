<?php include 'controllers/DepartmentControllers.php'; ?>

<?php
 
    DeleteDepartment($_GET['id']);
    echo "Department " . $_GET['id'] ." is Deleted!";
?>