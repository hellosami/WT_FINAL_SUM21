<?php require_once '../models/db_config.php'; ?>
<?php
    $query = "DELETE FROM POST_VEHICLE WHERE ID = '". $_GET['id'] ."';";
    echo execute($query);
?>