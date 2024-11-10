<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width=100%>
        <caption>XEM GIỎ HÀNG</caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Số Lượng</th>
                <th>Giá thành</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php
                session_start();
                if(isset($_SESSION['cart'])){
                    $count =0;
                    $Total =0;
                    $cart = $_SESSION['cart'];
                    foreach($cart as $code => $item){
                        $count ++;
                        $Total += $item['quantity'] * $item['price'];
            ?>
                        <tr>
                            <td><?=$count?></td>
                            <td><?=$code?></td>
                            <td><?=$item['name']?></td>
                            <td><?=$item['quantity']?></td>
                            <td><?=$item['price']?></td>
                            <td><?=$item['quantity'] * $item['price']?></td>
                        </tr>
            <?php
                    }
                }
                if(isset($Total)){
                    ?>
                    <td colspan="5">Tổng tiền</td>
                    <td><?=$Total?></td>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <p style="text-align: right;">
		<a href="display.php"><button class="btn btn-success">Mua tiếp</button></a>
		<a href="orders.php"><button class="btn btn-primary">Đặt hàng</button></a>
	</p>
</body>
</html>