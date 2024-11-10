<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <caption>DANH SÁCH HÀNG HÓA</caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Chọn mua</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fh = fopen("product.txt","r");
                $count = 0;
                while(!feof($fh)){
                    $line = fgets($fh);
                    if(!empty($line)){
                        $arr = explode("\t",$line);
                        $count++;
            ?>
            <tr>
                <td><?=$count?></td>
                <td><?=$arr[0]?></td>
                <td><?=$arr[1]?></td>
                <td><?=$arr[2]?></td>
                <td><?=$arr[3]?></td>
                <td>
                    <img src="images/<?=$arr[4]?>" width="200px">
                </td>
                <td>
                    <a href="addCart.php?code=<?=$arr[0]?>&name=<?=$arr[1]?>&price=<?=$arr[3]?>">
                        <button>Mua</button>
                    </a>
                </td>
            </tr>
            <?php
                    }
                }fclose($fh);
            ?>
        </tbody>
    </table>
</body>
</html>