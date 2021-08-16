
<?php session_start(); ?>
<?php include '../models/db_config.php';?>
<?php include '../controllers/PostController.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Renter Dashboard</title>

    <style>
        .reportPrice {
            background-color: #2ecc71;
            color: #fff;
            padding: 24px;
            font-size: 34px;
            text-align: center;
            width: max-content;
        }
    </style>
  
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>
        <br>
        <br>
        <br>
        <div class="content-wrapper">
            
            
        <?php
    $key = $_SESSION['RID'];
    $result = GetTotalCost($key);

    if(count($result)  > 0) {
        foreach($result as $key => $value) {
?>
            <div class="reportPrice">
                <span>Total Income<br><?php echo $value['wallet'];?> ৳</span>
            </div>
            


                        <?php

        }
    }
?>
      <br><br>
      
      <?php
    $key = $_SESSION['RID'];
    $result = GetRequestsIncomeByID($key);

    if(count($result)  > 0) {
        foreach($result as $key => $value) {
?>
            <div class="reportPrice">
                <table border='1'>
                    <tr>
                        <td>Post Title</td>
                        <td>Rate (BDT)</td>
                        <td>Posted Date</td>
                    </tr>
                    <tr>
                        <td><?php echo $value['title'];?></td>
                        <td><?php echo $value['rate'];?></td>
                        <td><?php echo $value['insertedDate'];?></td>
                    </tr>
                </table>
            </div>
            


                        <?php

        }
    }
?>
           
           
         
        </div>
    </div>
   

      
</body>
</html>