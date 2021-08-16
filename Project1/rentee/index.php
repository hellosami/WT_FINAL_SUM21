<?php session_start(); ?>

<?php include '../models/db_config.php'; ?>
<?php include '../controllers/PostController.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Renter Dashboard</title>

  
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            
            <?php 

            echo "Welcome, " . $_GET['email'];
            $_SESSION['RENTEEID'] = $_GET['id'];
            $_SESSION['RENTEE-Email'] = $_GET['email'];
            ?>
            
            </div>
        </div>
    </div>
   

      
</body>
</html>