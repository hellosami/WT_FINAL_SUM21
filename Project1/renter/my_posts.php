
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
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            <div class="added-posts-wrapper">
                <ul class="added-posts">
                    <?php

                    $result = GetPostsByID($_SESSION['RID']);

                    if(count($result)  > 0) {
                        foreach($result as $key => $value) { ?>

                        <br>
                        <li>
                        <div>
                        <span><?php echo $value['title'] ;?></span>
                        <span>Meter: <?php echo $value['meter'] ;?></span>
                        <span>Condition: <?php echo $value['pcondition'] ;?></span>
                        <span>Rate: <?php echo $value['rate'] ;?></span>
                        <span>Location: <?php echo $value['loc'] ;?></span>
                        <br>
                        <?php $url = "'edit_post.php?id=".$value['id'] . "'"; ?>
                        <button onclick="location.href=<?php echo $url;?>">EDIT</button>
                        <button onclick="deletepost(<?php echo $value['id'] ;?>);">DELETE</button>
                        </div>

                        </li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </div>
                
      
        
        </div>
    </div>
   
    <script>
        function deletepost(id) {

        var xhr = new XMLHttpRequest();

        xhr.open("GET", "includes/deletepost.php?id="+id, true);

        xhr.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            window.location.reload(false); 
            }
        };

        xhr.send();
    }
    </script>

</body>
</html>