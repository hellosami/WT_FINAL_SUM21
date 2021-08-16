<?php
if (isset($_POST["delete"])){

	$query = "DELETE FROM SIGNUP WHERE EMAIL = '". $_POST['email']."'";
	return execute($query);
}

if (isset($_POST["delete-manager"])){

	$query = "DELETE FROM MANAGER WHERE EMAIL = '". $_POST['email']."'";
	return execute($query);
}
        



?>