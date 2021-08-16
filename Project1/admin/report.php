<?php require_once '../models/db_config.php'; ?>
<?php require_once 'includes/GetUsers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            
        <span>Yearly Enrollment Report Of Manager</span>
        <table border="1">
        <tr>
            <td>Name</td>
            <td>Enrollment </td>
        </tr>
        
        <?php

                                    $result = GetManager();

                                    if(count($result)  > 0) {
                                        foreach($result as $key => $value) {
                                            ?>
                                        <tr>
                                          
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['enrollment']; ?></td>
                                            
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>

                                    
        </table>
        <br>
        <br>
        <br>
        <span>Yearly Enrollment Report Of Users</span>
        <table border="1">
        <tr>
            <td>Name</td>
            <td>Enrollment </td>
        </tr>
        
        <?php

                                    $result = GetUsers();

                                    if(count($result)  > 0) {
                                        foreach($result as $key => $value) {
                                            ?>
                                        <tr>
                                          
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['enrollment']; ?></td>
                                            
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
        </table>
        </div>
    </div>
   

</body>
</html>