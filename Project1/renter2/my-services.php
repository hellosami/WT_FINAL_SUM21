

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Services</title>

    <style>

        

        .grid {
            padding: 0;
            margin: 0;
            list-type: none;
            
        }

        .grid li div span {
            display: block;
        }

        .grid li div {
            border: 1px solid #444;
            margin-bottom: 24px;
        }

        .grid button {
            width: 100px;
            height: 40px;
            background-color: #27ae60;
            border: 0;
        }
        .grid button:hover {
            width: 100px;
            height: 40px;
            background-color: #2ecc71;
            border: 0;
            cursor: pointer;
        }

        .alert-wrapper span {
            border: 1px solid #444;
            padding: 12px;
            border-radius: 4px;
            position: fixed;
            right: 0;
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

    <div id="alert" class="alert-wrapper">
        <span id="alert-text"></span>
    </div>

    <ul id="grid" class="grid">
        
    </ul>

    <script>
        window.onload = function() {
            get("alert").style.display = "none";
            showPosts();
        }
        function get(id) {
            return document.getElementById(id);
        }

        function deleteService(id) {
            var xhr = new XMLHttpRequest();

            xhr.open("GET", "../controllers/DeleteServiceController.php?id=" + id, true);
            
            xhr.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                   // get("demo").innerHTML = this.responseText;
                   console.log();
                   if(this.responseText) {
                        showPosts();
                       get("alert").style.display = "block";
                       get("alert-text").innerText = "Post Deleted!";
                       setTimeout(function(){ get("alert").style.display = "none"; }, 3000);
                   }
                }
            };

            xhr.send();
        }

        function showPosts() {
            var xhr = new XMLHttpRequest();

            xhr.open("GET", "includes/show-posts.php", true);
            
            xhr.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                   get("grid").innerHTML = this.responseText;
                }
            };

            xhr.send();
        }
    </script>
</body>
</html>