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
                <th>Ten Hang</th>
                <th>So luong</th>
                <th>Gia Tien</th>
                <th>Tong tien</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = $_GET['no'];
                $fh = fopen("chitie.txt","r");
                $count = 0;
                $total=0;
                while(!feof($fh)){
                    $line = fgets($fh);
                    if(!empty($line)){
                        $arr = explode("\t",$line);
                        if($arr[0] == $no){
                            $count++;
                            $total += floatval($arr[3]) * floatval($arr[4]);
                        
            ?>
                        <tr>
                            <td><?=$count?></td>
                            <td><?=$arr[1]?></td>
                            <td><?=$arr[2]?></td>
                            <td><?=$arr[3]?></td>
                            <td><?=$arr[4]?></td>
                            <td><?=floatval($arr[3]) * floatval($arr[4])?></td>
                        </tr>
            <?php
                        }
                    }
                }
                    fclose($fh);
            ?>
            
                    <tr>
                        <td colspan="5">ALLLL</td>
                        <td><?=$total?></td>
                    </tr>
                    
        </tbody>
    </table>
    <a href="listOrder.php">Bach To List Order</a>
</body>
</html>