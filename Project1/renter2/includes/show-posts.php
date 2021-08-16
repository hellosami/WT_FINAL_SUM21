<?php
   require_once '../../models/db_config.php';
    function GetPosts(){
        $query = "SELECT * FROM POST_VEHICLE;";
        return get($query);
    }  
?>

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
                    <button class='btn' onclick='deleteService(".$value['id'].");'>Delete</button>
                </div>
            </li>
        ";
    }
?>