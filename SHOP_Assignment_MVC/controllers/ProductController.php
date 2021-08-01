
<?php
    require_once 'models/db_config.php';
    function searchProduct($key) {
        $query = "select id, category_name from categories where category_name like '%$key%'";
        $rs = get($query);
        return $rs;
    }
?>