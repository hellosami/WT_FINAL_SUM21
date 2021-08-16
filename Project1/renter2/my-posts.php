<?php
    require_once '../models/db_config.php';
    require_once '../controllers/PostController.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-content">
        <table>
            <tr>
                <?php include 'includes/renter-menu.php';?>
                <td>
                    <div class="content-wrapper">
                        <ul class="container-wrapper">
                            <?php
                                $result = GetPostsByID();
                                foreach($result as $key => $value) {
                                    echo "
                                        <li class='container'>
                                            <div >
                                                <span class='title'>".$value['title']."</span>
                                                <span>".$value['meter']." km</span>
                                                <span>".$value['loc']."</span>
                                                <span class='category'>Category: ".$value['category']."</span>
                                                <span>".$value['pcondition']."</span>
                                                <span>Rent Price: ".$value['rate']." /hr</span>
                                                <br>
                                                <button class='btn-edit'>EDIT POST</button>
                                                <button class='btn-delete'>DELETE POST</button>
                                            </div>
                                        </li>
                                    ";
                                }
                            ?>
                        </ul>
                    </div>
                </td>
            </tr>

        </table>
    </div>
    


    <script>
        
    </script>



    
</body>
</html>