<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="200 px">
        <caption>LIST</caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ma hang</th>
                <th>Thoi Gian</th>
                <th>Tong tien</th>
                <th>Xem Chi Tiet</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fh = fopen("donhang.txt","r");
                $count = 0;
                while(!feof($fh)){
                    $line = fgets($fh);
                    if(!empty($line)){
                        $count++;
                        $arr = explode("\t",$line);
            ?>
                        <tr>
                            <td><?=$count?></td>
                            <td><?=$arr[0]?></td>
                            <td><?=$arr[1]?></td>
                            <td><?=$arr[2]?></td>
                            <td><a href="showDetail.php?no=<?=$arr[0]?>"><button>Xem chi tiet</button></a></td>
                        </tr>
            <?php
                    }
                }fclose($fh);
            ?>
        </tbody>
    </table>
    <a href="display.php">Mua Tiep</a>
</body>
</html>