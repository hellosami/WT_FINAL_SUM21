<?php
function GetUserInfoByID($ID){
    $query = "SELECT * FROM SIGNUP WHERE ID = '$ID';";
    return get($query);
}

?>