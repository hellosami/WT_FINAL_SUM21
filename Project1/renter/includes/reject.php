<?php include '../../models/db_config.php';?>

<?php
    $id = $_GET['id'];



    $query = "DELETE FROM REQUESTS WHERE ID = $id";
    execute($query);


    //DELETE FROM table_name WHERE condition;

?>