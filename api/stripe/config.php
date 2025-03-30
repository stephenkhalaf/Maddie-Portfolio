<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51NYiuEGYrBLir6UBqrXe6tROlirUJijIw3cLHwVS4Y4CXJScj6jmplozYeOa8t4ODcfc6ByJgKNZh9m2sNGdKoGn00DP9AdKIa",
        "publishableKey" => "pk_test_51NYiuEGYrBLir6UBsHNygZLaTDalzSNfusJIWfqWBsrR8Ykfhs2XQyhQc3nVlVwjVlz4bMNLG6Nvoy2LbmLBQOrw00rI5vOsy2"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>