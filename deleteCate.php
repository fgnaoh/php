<?php
	//lấy thông tin từ client
	$id = intval($_GET['id']);
	//Kết nối máy chủ CSDL
	include_once('connection.php');
	$sql = "DELETE FROM tblcategory WHERE id = $id";
	$con->query($sql);
	header("Location:category.php");
?>