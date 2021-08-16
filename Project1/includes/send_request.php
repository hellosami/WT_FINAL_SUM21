<?php include '../models/db_config.php'; ?>


<?php

    $postid = $_GET['postid'];
    $renterID = $_GET['renterid'];
    $renteeID = $_GET['renteeid'];

    $query = "INSERT INTO REQUESTS VALUES (NULL, '$postid', '$renterID', '$renteeID', 0)";
    echo execute($query);
    //return ;

?>