<?php include 'controllers/StudentControllers.php'; ?>

<!DOCTYPE html>
<html >
<head>

    
    <title>Student Page</title>
</head>
<body>
    <a href="dashboard.php"> << Go To Dashboard </a>
    <h1>All Students</h1>
    <?php

    $result = showAllStudents();

    echo "<pre>";

    echo "<table border='1'>";
    
    echo "<tr>
        <td>ID</td>
        <td>Name</td>
        <td>DOB</td>
        <td>Credit</td>
        <td>CGPA</td>
        <td>DEPT ID</td>
        <td></td>
        <td></td>
    </tr>";
    foreach($result as $key => $value) {
        
        echo "<tr><td>" . $value['id'] ."</td>";
        echo "<td>" . $value['name'] ."</td>";
        echo "<td>" . $value['dob'] ."</td>";
        echo "<td>" . $value['credit'] ."</td>";
        echo "<td>" . $value['cgpa'] ."</td>";
        echo "<td>" . $value['dept_id'] ."</td>";
        echo "<td><a href='EditStudent.php?id=". $value['id'] ."'>Edit</a></td>";
        echo "<td><a href='DeleteStudent.php?id=". $value['id'] ."'>Delete</a></td></tr>";

    }

    echo "</table>";
    ?>

    
</body>
</html>
