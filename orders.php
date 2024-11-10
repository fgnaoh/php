<?php
session_start();
$shc = $_SESSION['cart'];
    if(isset($_SESSION['no'])){
        $no = $_SESSION['no'];
    }else{
        $no = 0;
    }
    $no++;
    $_SESSION['no'] = $no;
    
    $fh = fopen("donhang.txt","a");
    $total = 0;
    foreach($shc as $code => $item){
        $total += $item['quantity'] * $item['price']; 
    }
    fputs($fh,$no."\t".date("d/m/Y H:i:s")."\t".$total."\n");
    fclose($fh);
    $fh = fopen("chitie.txt","a");
    foreach($shc as $code => $item){
        fwrite($fh,$no."\t".$code."\t".$item['name']."\t".$item['quantity']."\t".$item['price']."\n");
    }
    fclose($fh);
    header("location: listOrder.php");
?>