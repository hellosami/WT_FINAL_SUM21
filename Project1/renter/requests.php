
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
    
                    $result = GetRequestsByID($_SESSION['RID']);
                
                    if(count($result)  > 0) {
                        foreach($result as $key => $value) {

                            echo "
                            <br>
                            <li>
                                <div>
                                    <span>".$value['title']."</span>
                                    <span>Meter: ".$value['rate']."</span>
                                    <span>Meter: ".$value['contact']."</span>
                                    <span>Rentee ID: ".$value['rentee_id']."</span>"; ?>
                                    <button onclick="accept('<?php echo $value['id'];?>', '<?php echo $value['rate'];?>', '<?php echo $value['renter_id'];?>');">ACCEPT</button>
                                    <button onclick="reject('<?php echo $value['id'];?>');">REJECT</button>
                      
                                    <?php echo "
                                </div>

                            </li>
                            ";
                        }
                    }
                    ?>
                </ul>
            </div>
                
      
        
        </div>
    </div>
   

    <script>
        function get(id) {
    return document.getElementById(id);
}


function accept(id, rate, renterid) {


    var xhr = new XMLHttpRequest();

    xhr.open("GET", "includes/accept.php?id="+id+"&rate="+rate+"&renterid="+renterid, true);
    
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
           console.log(this.responseText);
           window.location.reload(false); 
        }
    };

    xhr.send();
}


function reject(id) {


var xhr = new XMLHttpRequest();

xhr.open("GET", "includes/reject.php?id="+id, true);

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