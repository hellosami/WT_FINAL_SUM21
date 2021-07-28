<?php
// name: no number
// dob: formate check
// credit <= 140
// cgpa <= 4.00
// dept select
	require_once 'models/db_config.php';
	require_once 'models/my_validation.php';
	
	$id = "";


	$name = "";
	$err_name = "";

	$dob = "";
	$err_dob = "";

	$credit = "";
	$err_credit = "";

	$cgpa = "";
	$err_cgpa = "";

	$dept = "";
	$err_dept = "";

	$hasError = false;

	$msg_db = "";

	if(isset($_POST["btn_edit"])){
		$id = $_POST['id'];

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "Name Required!";
		}
		else if(strlen($_POST["name"]) < 4) {
			$hasError = true;
			$err_name = "Minimum Length 4 Characters!";
		}
		else{
			$name = $_POST["name"];
		}

		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob = "DOB Required!";
		}

		else{
			$dob = $_POST["dob"];
		}

		// credit
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit = "Credit Required!";
		}

		else{
			$credit = $_POST["credit"];
		}

		// credit
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa = "CGPA Required!";
		}

		else{
			$cgpa = $_POST["cgpa"];
		}

		// credit
		if(!isset($_POST["dept"])){
			$hasError = true;
			$err_dept = "Department Required!";
		}

		else{
			$dept = $_POST["dept"];
		}


		if(!$hasError){

				$rs = editStudent($id, $name, $dob, $credit, $cgpa, $dept);
				$msg_db = "Student Edited";
			
		}
	}

	else if(isset($_POST["btn_add"])) {
		

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "Name Required!";
		}
		else if(strlen($_POST["name"]) < 4) {
			$hasError = true;
			$err_name = "Minimum Length 4 Characters!";
		}
		else{
			$name = $_POST["name"];
		}

		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob = "DOB Required!";
		}

		else{
			$dob = $_POST["dob"];
		}

		// credit
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit = "Credit Required!";
		}

		else{
			$credit = $_POST["credit"];
		}

		// credit
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa = "CGPA Required!";
		}

		else{
			$cgpa = $_POST["cgpa"];
		}

		// credit
		if(!isset($_POST["dept"])){
			$hasError = true;
			$err_dept = "Department Required!";
		}

		else{
			$dept = $_POST["dept"];
		}


		if(!$hasError){

				$rs = addStudent($name, $dob, $credit, $cgpa, $dept);
				$msg_db = $rs;

		}

	
	}




	function showAllStudents() {
		$query = "SELECT * FROM students;";
		return get($query);
	}

	function showStudentById($id) {
		$query = "SELECT * FROM students WHERE id = $id;";
		return get($query);
	}

	function editStudent($id, $name, $dob, $credit, $cgpa, $dept){
		$query = "UPDATE students SET name = '$name', dob = '$dob', credit = '$credit', cgpa = '$cgpa', dept_id = '$dept' WHERE id = '$id'";
		return execute($query);
	}

	function addStudent($name, $dob, $credit, $cgpa, $dept){
	
		$query = "INSERT INTO students values (NULL, '$name', '$dob', '$credit', '$cgpa', '$dept')";
		return execute($query);
	}
	
	function DeleteStudent($id) {
		$query = "DELETE FROM students WHERE id = $id;";
		return execute($query);
	}
	
?>