<html>
<head></head>
    <body>
    <h1>
PRODUCT
</h1>
   
    <?php
            $product = $_GET['product'];
            $price = $_GET['price'];
            $quantity = $_GET['quantity'];
            $discount = $_GET['discount'];
            $total = $price * $quantity - $price * $quantity * $discount / 100;

        if ($discount !== '') {
    $discount = 0;
}


        if (!is_numeric ($price) || !is_numeric ($quantity) || !is_numeric ($discount)) {
    
    echo 'Unexpected operation';
    exit;
}
        if (($price <= 0) || ($quantity <=0) || ($discount < 0)) {
    echo 'Unexpected operation';
    exit;
}
                

        echo "$product $price $quantity $total";

?>
<table border>
    <tr>  
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Discont</th>
        <th>Total</th>
    </tr>

        <td><?php echo $product; ?></td>    
        <td><?php echo $price; ?></td>
        <td><?php echo $quantity; ?></td>
        <td><?php echo $discount, '%'; ?></td>
        <td><?php echo $total; ?></td>



</table>
    
    </body>

</html>
