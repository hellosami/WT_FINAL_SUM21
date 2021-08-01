<!DOCTYPE html>
<html >
<head>

    <title>Document</title>

    <style>
        * {
            font-family: 'Trebuchet MS';
        }
        .btn {
            border: 0;
            background-color: rgb(0, 89, 255);
            width: 100px;
            height: 40px;
            color: #fff;
            cursor: pointer;
        }

        .image {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    
    <button class="btn" onclick="loadDoc()">Click Me!</button>
    <br>
    <br>
    <div id="demo"></div>

    <script>

        function get(id) {
            return document.getElementById(id);
        }

        function loadDoc() {
            var xhr = new XMLHttpRequest();

            xhr.open("GET", "my_profile.php", true);
            
            xhr.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    get("demo").innerHTML = this.responseText;
                }
            };

            xhr.send();
        }

    </script>    
</body>
</html>