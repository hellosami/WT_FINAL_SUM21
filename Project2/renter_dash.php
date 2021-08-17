<?php
    session_start();
    if(isset($_SESSION['SID'])) {
        var_dump($_SESSION['SID']);
    }
   
?>