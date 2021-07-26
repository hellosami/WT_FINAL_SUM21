<?php include 'controllers/CategoryControllers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="dashboard.php"> << Go To Dashboard </a>
    <h1>All Categories</h1>
    <?php

    $result = showAllCategories();

    echo "<pre>";

    echo "<table border='1'>";
    
    echo "<tr><td>ID</td><td>Category Name</td></tr>";
    foreach($result as $key => $value) {
        
        echo "<tr><td>" . $value['id'] ."</td>";
        echo "<td>" . $value['category_name'] ."</td></tr>";
    }

    echo "</table>";
    ?>
</body>
</html>