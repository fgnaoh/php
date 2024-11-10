<?php
    $code = $_POST['code'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price =  $_POST['price'];
    $folder = "images/";
    $fileName = basename($_FILES['image']['name']);
    $path = $folder.$fileName;
    echo $path;
    
    $fh = fopen("product.txt","a");
    fputs($fh,$code."\t".$name."\t".$quantity."\t".$price."\t".$fileName."\n");
    fclose($fh);
    if(!file_exists($path)){
        move_uploaded_file($_FILES['image']['imp_name'],$path);
    }
    header("location:display.php");
?>