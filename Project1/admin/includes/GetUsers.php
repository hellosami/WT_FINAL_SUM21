<?php
function GetUsers(){
    $query = "SELECT * FROM SIGNUP;";
    return get($query);
}

function GetManager(){
    $query = "SELECT * FROM MANAGER;";
    return get($query);
}
?>