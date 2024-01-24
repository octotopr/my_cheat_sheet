<?php
$best_sellers = [
    "Chocolate", "Mints", "fudge", "Bubble gum", "Toffee", "Jelly beans",
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
    <link rel="stylesheet" href="../../css/styles.css" type="text/css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
        <li><?= $best_sellers[0] ?></li>
        <li><?= $best_sellers[1] ?></li>
        <li><?= $best_sellers[2] ?></li>
    </ul>
</body>

</html>