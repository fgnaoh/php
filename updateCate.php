<?php
	//lấy thông tin từ client
	$id = intval($_POST['id']);
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	//Kết nối máy chủ CSDL
	include_once('connection.php');
	$sql = "UPDATE tblcategory SET name = '$name',description='$desc' WHERE id = $id";
	$con->query($sql);
	header("Location:category.php");
?>