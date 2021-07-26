<?php
	require_once 'models/db_config.php';
	$category_name="";
	$err_category_name="";

	$category_id="";

	$msg_db="";
	$hasError=false;
	

	if (isset($_POST["btn_add"])){
		if(empty($_POST["category-name"])){
			$hasError = true;
			$err_category_name = "Category Name Required";
		}
		else{
			$category_name = $_POST["category-name"];
		}

		if(!$hasError){
			$rs = insertCategory($category_name);
			$msg_db = $rs;
		}
		
	}
	else if (isset($_POST["btn_edit"])){
		if(empty($_POST["category-name"])){
			$hasError = true;
			$err_category_name = "Category Name Required";
		}
		else{
			$category_name = $_POST["category-name"];
			$category_id = $_POST["category-id"];

		

		}

		
		if(!$hasError){
			$rs = editCategory($category_id, $category_name);
			$msg_db = $rs;
		}
		
	}

	
	function insertCategory($category_name){
		$query = "INSERT INTO categories values (NULL, '$category_name')";
		return execute($query);
	}

	function editCategory($category_id, $category_name){
		$category_id = $_POST['category-id'];
		$query = "UPDATE categories SET category_name = '$category_name' WHERE id = $category_id";
		return execute($query);
	}



	function showAllCategories() {
		$query = "SELECT id, category_name FROM categories;";
		return get($query);
	}

	

	
?>