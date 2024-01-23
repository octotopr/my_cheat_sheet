<?php
$nutrition = [
    "fat" => 38,
    "sugar" => 51,
    "salt" => 0.25,
];
$nutrition["fat"] = 36;
$nutrition["fiber"] = 2.1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Arrays</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>$nutrition (per 100g)</h2>
    <p>Fat: <?= $nutrition["fat"] ?></p>
    <p>Sugar: <?= $nutrition["sugar"] ?></p>
    <p>Salt: <?= $nutrition["salt"] ?></p>
    <p>Fiber: <?= $nutrition["fiber"] ?></p>
</body>

</html>