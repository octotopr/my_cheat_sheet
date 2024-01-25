<?php
function calculate_cost($cost, $quantity, $discount = 0)
{
    $cost = $cost * $quantity;
    return $cost - $discount;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Values for Parameters</title>
    <link rel="stylesheet" href="../../css/styles.css" type="text/css" />
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Dark chocolate $<?= calculate_cost(5, 10, 5) ?></p>
    <p>Milk chocolate $<?= calculate_cost(3, 4) ?></p>
    <p>White chocolate $<?= calculate_cost(4, 15, 20) ?></p>
</body>

</html>