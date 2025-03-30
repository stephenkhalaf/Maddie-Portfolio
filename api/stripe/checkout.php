<?php 
include_once "../config/database.php";


if(isset($_GET['total'])){
    $total = $_GET['total'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    html{
        height:100%;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        width:100%;
        height:100%
    }

    span{
        width:400px;
    }
</style>
<body>
<form action="checkout-charge.php" method="POST">
    <input type="hidden" name="amount" value="<?php echo $total ?>">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_51NYiuEGYrBLir6UBsHNygZLaTDalzSNfusJIWfqWBsrR8Ykfhs2XQyhQc3nVlVwjVlz4bMNLG6Nvoy2LbmLBQOrw00rI5vOsy2"
        data-amount=<?php $total * 100 ?>
        data-currency="usd"
        data-locale="auto">

    </script>

</form>
    
</body>
</html>
