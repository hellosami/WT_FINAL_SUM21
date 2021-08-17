


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="search-wrapper">
            <input type="text" onkeyup="GetPosts(this)">
            <div class="search-result-wrapper">
                <ul class="search-result" id="search-result">

                </ul>
            </div>
        </div>
    </div>
   
    <script src="js/search.js"></script> 

    <script>
        function SendARequest(postid, renterid, renteeid) {
    
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "includes/send_request.php?postid="+ postid +"&renterid="+ renterid +"&renteeid="+ renteeid, true);
    
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
           alert("Request Sent! Wait For Approval!!");
        }
    };

    xhr.send();
}

        </script>
</body>
</html>