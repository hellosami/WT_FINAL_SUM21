<?php include 'controllers/DepartmentControllers.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="dashboard.php"> << Go To Dashboard </a>
    <h1>All Departments</h1>
    <?php

    $result = showAllDeparments();

    echo "<pre>";

    echo "<table border='1'>";
    
    echo "<tr>
        <td>ID</td>
        <td>Name</td>
    </tr>";
    foreach($result as $key => $value) {
        echo "<tr><td>" . $value['id'] ."</td>";
        echo "<td>" . $value['name'] ."</td>";
        echo "<td><a href='EditDepartment.php?id=". $value['id'] ."'>Edit</a></td>";
        echo "<td><a href='DeleteDepartment.php?id=". $value['id'] ."'>Delete</a></td></tr>";
    }

    echo "</table>";
    ?>
</body>
</html>