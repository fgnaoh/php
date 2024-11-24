<?php
	//Lấy thông tin từ client gửi lên (khi submit form)
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	//Kết nối csdl
	include_once('connection.php');
	//Kết nối thành công
	$sql = "INSERT INTO tblcategory (name,description) VALUES('$name','$desc')";
	$con->query($sql);//Thực hiện truy vấn
	$con->close();
	header("Location: category.php");

?>