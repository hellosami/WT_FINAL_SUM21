<?php
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

    <table>
        <tr>
            <?php include 'includes/renter-menu.php';?>
            <td>
                <div class="content-wrapper">
                    <div class="block" onclick="location.href='post-vehicle.php'">
                        <img src="image/icons/roadster-fill.svg" alt="">
                    </div>
                
                    <div class="block" onclick="location.href='#'">
                        <img src="image/icons/home-heart-fill.svg" alt="">
                    </div>
                
                    <div class="block" onclick="location.href='#'">
                        <img src="image/icons/camera-fill.svg" alt="">
                    </div>
                </div>
            </td>
        </tr>
    </table>


    <script>
        
    </script>



    
</body>
</html>