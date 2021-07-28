<?php include 'controllers/StudentControllers.php'; ?>

<?php
 
    DeleteStudent($_GET['id']);
    echo "Student " . $_GET['id'] ." is Deleted!";
?>