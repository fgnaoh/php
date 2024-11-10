<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="enterProduct.php" method="post" enctype="multipart/form-data">
        <label for="">Mã sản phẩm</label>
        <input type="text" name="code" id=""><br>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" id=""><br>
        <label for="">Nhóm hàng</label>
        <select name="category" id="">
            <?php
                $fh = fopen("category.txt","r");
                while(!feof($fh)){
                    $line = fgets($fh);
                    if(!empty($line)){
                        $arr = explode("\t",$line);
                        echo'<option value="'.$arr[0].'">'.$arr[1].'</option>';
                    }
                }fclose($fh);
            ?>
        </select>
        <label for="">Image</label>
        <input type="file" name="image"><br>
        <label for="">Số lượng</label>
        <input type="text" name="quantity" id=""><br>
        <label for="">Giá tiền</label>
        <input type="text" name="price" id=""><br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <a href="category.html"><button>Go to Category Site</button></a>
</body>
</html>				
