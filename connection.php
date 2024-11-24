<?php
	include_once('config.php');
	$con = new mysqli($url,$uname,$upass,$dbname);
	if($con->connect_error){
		die('Không kết nối được với máy chủ CSDL'.$con->connect_error);
	}
?>