<?php
    $maHang = $_POST['maHang'];
    $tenHang = $_POST['tenHang'];
    $moTa = $_POST['moTa'];
    $fh = fopen("category.txt","a");
    fputs($fh,$maHang."\t".$tenHang."\t".$moTa."\n");
    fclose($fh);
    header("location: category.html");
?>