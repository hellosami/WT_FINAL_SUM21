
<?php
   require_once 'models/db_config.php';

    function GetPosts(){
        $query = "SELECT * FROM POST_VEHICLE;";
        return get($query);
    }



    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>

        .navi-container {
            margin: 0;
            padding: 0;
        }

        .navi-container li {
            list-style: none;
            display: inline;
        }

        .grid {
            padding: 0;
            margin: 0;
            list-style: none;
            
        }

        .grid li div span {
            display: block;
        }

        .grid li div {
            border: 1px solid #444;
            margin-bottom: 24px;
        }
    </style>
</head>
<body>

    <ul class="navi-container">
        <li><a href="#">Home</a></li>
        <li><a href="#">Company</a></a></li>
        <li><a href="#">Services</a></a></li>
        <li><a href="#">Blog</a></a></li>
        <li><a href="login.php">Log in</a></a></li>
        <li><a href="#">Sign up</a></a></li>
    </ul>

    <br>
    <label for="search">Search</label>
    <input type="text" id="search">

    <!-- there will be some posts from database -->

    <ul class="grid">
        <?php
            $result = GetPosts();
            foreach($result as $key => $value) {
                echo "
                    <li>
                        <div>
                            <span>".$value['title']."</span>
                            <span>".$value['category']."</span>
                            <span>".$value['rate']."</span>
                            <span>".$value['pcondition']."</span>
                            <span>".$value['rnumber']."</span>
                            <span>".$value['meter']."</span>
                            <span>".$value['loc']."</span>
                            <span>".$value['address']."</span>
                            <span>".$value['contact']."</span>
                            <span>".$value['tc']."</span>
                        </div>
                    </li>
                ";
            }
        ?>
    </ul>
</body>
</html>