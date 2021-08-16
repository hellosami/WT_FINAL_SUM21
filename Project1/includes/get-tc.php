<?php
    header('Content-disposition: attachment; filename=Terms.txt');
    header('Content-type: text/plain');
    echo $_GET['data'];
?>