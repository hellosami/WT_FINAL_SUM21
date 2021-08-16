<?php include '../../models/db_config.php';?>

<?php
    $id = $_GET['id'];

    $rate = $_GET['rate'];
    $renterid = $_GET['renterid'];

    $query = "UPDATE REQUESTS SET STATUS = '1' WHERE ID = '$id'"; // id: request id
    execute($query);



    
    $query = "UPDATE SIGNUP SET WALLET = (WALLET + $rate) WHERE ID = $renterid"; 
    execute($query);

    return "OK";

?>