<?php
	require_once 'models/db_config.php';

	$dept_name = "";
	$err_dept_name = "";

	$hasError = false;
	$msg_db = "";


	if(isset($_POST["btn_add_dept"])) {
		if(empty($_POST["dept-name"])){
			$hasError = true;
			$err_dept_name = "Name Required!";
		}
		else if(strlen($_POST["dept-name"]) < 2) {
			$hasError = true;
			$err_dept_name = "Minimum Length 2 Characters!";
		}
		else{
			$dept_name = $_POST["dept-name"];
		}

		if(!$hasError) {
			$rs = addDepartment($dept_name);
			$msg_db = "Department Added!";
		}
	}

	else if(isset($_POST["btn_edit_dept"])) {
		$id = $_POST['id'];

		if(empty($_POST["dept-name"])){
			$hasError = true;
			$err_dept_name = "Name Required!";
		}
		else if(strlen($_POST["dept-name"]) < 2) {
			$hasError = true;
			$err_dept_name = "Minimum Length 2 Characters!";
		}
		else{
			$dept_name = $_POST["dept-name"];
		}

		if(!$hasError) {
			$rs = editDepartment($id, $dept_name);
			$msg_db = "Department Edited!";
		}
	}



	function showAllDeparments() {
		$query = "SELECT * FROM department;";
		return get($query);
	}

	function addDepartment($dept_name){
		$query = "INSERT INTO department values (NULL, '$dept_name')";
		return execute($query);
	}
	
	
	function showDepartmentById($id) {
		$query = "SELECT * FROM department WHERE id = $id;";
		return get($query);
	}

	
	function editDepartment($id, $dept_name){
		$query = "UPDATE department SET name = '$dept_name' WHERE id = '$id'";
		return execute($query);
	}

	function DeleteDepartment($id) {
		$query = "DELETE FROM department WHERE id = $id;";
		return execute($query);
	}
	
	
?>