<?php
    session_start();
    
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = [];
    }
    $code = $_GET['code'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    
    if(array_key_exists($code, $cart)){
        $cart[$code]['quantity']++;
    }else{
        $cart[$code] = array('name'=>$name,'quantity'=>1,'price'=>$price);
    }
    $_SESSION['cart'] = $cart;
    header("location:viewCart.php");
?>