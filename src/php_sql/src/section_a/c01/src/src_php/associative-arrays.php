<?php
$nutritin = [
    "fat" => 16,
    "sugar" => 51,
    "salted" => 6.3,
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat: <?= $nutritin["fat"] ?></p>
    <p>Sugar: <?= $nutritin["sugar"] ?></p>
    <p>Salted: <?= $nutritin["salted"] ?></p>
</body>

</html>