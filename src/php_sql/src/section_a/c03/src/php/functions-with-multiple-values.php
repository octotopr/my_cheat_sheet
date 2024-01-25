<?php
$us_price = 4;
$rates = [
    "uk" => 0.81,
    "eu" => 0.93,
    "jp" => 113.21,
];

function calculate_prices($usd, $exchange_rates)
{
    $prices = [
        "pound" => $usd * $exchange_rates["uk"],
        "euro" => $usd * $exchange_rates["eu"],
        "yen" => $usd * $exchange_rates["jp"],
    ];
    return $prices;
}

$global_prices = calculate_prices($us_price, $rates);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functiond with Multiple Values</title>
    <link href="../../css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>US $<?= $us_price ?></p>
    <p>(UK &pound; <?= $global_prices["pound"] ?> |
        EU &euro; <?= $global_prices["euro"] ?> |
        JP &yen; <?= $global_prices["yen"] ?>)</p>
</body>

</html>