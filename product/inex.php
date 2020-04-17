<html>
<head></head>
    <body>
    <h1>
discount
</h1>
    <p>
    <?php
            $product = $_GET['product'];
            $price = $_GET['price'];
            $quantity = $_GET['quantity'];
            $total = $price * $quantity;
            $discount = $_GET['discount'];

        echo "$product $price $quantity $total";

?>

    </p>
    </body>

</html>
