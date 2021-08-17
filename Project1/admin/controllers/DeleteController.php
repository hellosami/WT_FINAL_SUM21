<?php
if (isset($_POST["delete"])){

	$query = "DELETE FROM SIGNUP WHERE EMAIL = '". $_POST['email']."'";
	execute($query);
	echo "<script>alert('User Deleted!!')</script>";
}

if (isset($_POST["delete-manager"])){

	$query = "DELETE FROM MANAGER WHERE EMAIL = '". $_POST['email']."'";
	execute($query);
	echo "<script>alert('Manager Deleted!!')</script>";
}
        



?>