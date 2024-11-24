<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang nhập nhóm</title>
	<style type="text/css">
		a{
			text-decoration: none;
			color:black;
		}
	</style>
</head>
<body>
	<form action="addCate.php" method="post">
		<label for="name">Tên nhóm</label>
		<input type="text" name="name" id="name"><br>
		<label for="desc">Mô tả</label>
		<textarea id="desc" name="desc" rows="5" cols="20"></textarea><br>
		<button type="submit">Lưu</button>
		<button type="reset">Xóa</button>

	</form>
	<!--Hiện thông tin các bản ghi của bảng tblcategory-->
	<table width="100%" border="1" style="border-collapse: collapse;">
		<caption>
			<h1>DANH SÁCH CÁC NHÓM HÀNG HIỆN CÓ</h1>
		</caption>
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên nhóm</th>
				<th>Mô tả</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
	<?php
		//Chèn file cấu hình chưa thông tin truy cập máy chủ CSDL
		include_once("config.php");
		//Tạo kết nối đến máy chủ CSDL
		$con = new mysqli($url,$uname,$upass,$dbname);
		if($con->connect_error) die('Không kết nối được với máy chủ CSDL'.$con->connect_error);
		//Tạo kết nối thành công
		$sql = "SELECT * FROM tblcategory";
		$rs = $con->query($sql);
		$count = 0;
		while($r=$rs->fetch_assoc()){
			$count++;
		?>
		<tr>
			<td><?=$count?></td>
			<td><?=$r['name']?></td>
			<td><?=$r['description']?></td>
			<td align="center">
				<button type="button">
				<a href="editCate.php?id=<?=$r['id']?>">
					Sửa
				</a>
				</button>
				<button type="button" onclick="xoa('<?=$r['id']?>')">Xóa</button>
			</td>
		</tr>
		<?php	
		}
		//đóng kết nối CSDL
		$con->close();
	?>		
		</tbody>
	</table>
	<script type="text/javascript">
		function xoa(id){
			let ans = confirm("Bạn có thực sụ muốn xóa không?");
			if(ans){
				location.href = "deleteCate.php?id="+id;
			}
		}
	</script>
</body>
</html>