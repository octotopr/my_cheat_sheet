<?php
$prefix = "Thank you ";
$name = "Dima";
$message = $prefix . $name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator</title>
    <link rel="stylesheet" href="../../css/styles.css" type="text/css">
</head>

<body>
    <h1>The Candy Story</h1>
    <h2><?= $name; ?>'s Order</h2>
    <p><?= $message; ?></p>
</body>

</html>