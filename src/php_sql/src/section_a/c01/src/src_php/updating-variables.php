<?php
$name = "Guest";
$name = "Dima";
$price = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Variables</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name; ?></h2>
    <p>The cost of your candy is $<?= $price; ?></p>
</body>

</html>