<?php include '../../models/db_config.php';?>

<?php
    $id = $_GET['id'];



    $query = "DELETE FROM POST_VEHICLE WHERE ID = $id";
    execute($query);


    //DELETE FROM table_name WHERE condition;

?>