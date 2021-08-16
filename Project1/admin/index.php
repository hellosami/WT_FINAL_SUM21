
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
            
            <div class="btn-xl-container">
                <div class="btn-xl" onclick="location.href='crud-renter.php'" ><span>Renter/ Rentee</span></div>
                <div class="btn-xl" onclick="location.href='crud-manager.php'"><span>Manager</span></div>

            </div>
            
        </div>
    </div>
   

</body>
</html>