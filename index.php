<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Native PHP</title>
</head>
<body>
<form action="index.php" method="POST">
    <label for="quantity">Quantity</label><br/>
    <input type="text" value="" name="quantity" id="quantity" /><br/>

    <input type="submit" value="Total" />
</form>
</body>
</html>

<?php

$item = 'pizza';
$price = 100.33;
$total = null;

if (isset($_POST['quantity'])) {
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;
}

echo 'Your Total is: ' . $total;

?>