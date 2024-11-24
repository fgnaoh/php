<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa nhóm hàng</title>
</head>
<body>
<?php
	//lấy thông tin của nhóm hàng có id được gửi từ client 
	//Lấy id
	$id = intval($_GET['id']);
	//Kết nối máy chủ CSDL
	include_once('connection.php');
	$sql = "SELECT * FROM tblcategory WHERE id = $id";
	$rs = $con->query($sql);
	$name = '';
	$desc = '';
	if($rs->num_rows>0){
		$r = $rs->fetch_assoc();
		$name = $r['name'];
		$desc = $r['description'];
	}

?>
<form action="updateCate.php" method="post">
		<label for="name">Tên nhóm</label>
		<input type="text" name="name" id="name" value="<?=$name?>"><br>
		<label for="desc">Mô tả</label>
		<textarea id="desc" name="desc" rows="5" cols="20"><?=$desc?></textarea><br>
		<input type="hidden" id="id" name="id" value="<?=$id?>">
		<button type="submit">Lưu</button>
		<button type="reset">Xóa</button>

	</form>
</body>
</html>