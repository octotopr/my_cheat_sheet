<?php
$offers = [
    ["name" => "Toffee", "price" => 5, "stock" => 120,],
    ["name" => "Mints", "price" => 3, "stock" => 66,],
    ["name" => "Fudge", "price" => 4, "stock" => 97,],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="../../css/styles.css" type="text/css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <p><?= $offers[0]["name"] ?> - <?= $offers[0]["price"] ?></p>
    <p><?= $offers[1]["name"] ?> - <?= $offers[1]["price"] ?></p>
    <p><?= $offers[2]["name"] ?> - <?= $offers[2]["price"] ?></p>
</body>

</html>