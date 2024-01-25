<?php
function write_logo()
{
    echo "<img src='../../img/logo.png' alt='logo'";
}

function notice()
{
    $year = date('Y');
    echo '&copy; ' . $year;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Functions</title>
    <link rel="stylesheet" href="../../css/styles.css" type="text/css" />
</head>

<body>
    <header>
        <h1><?php write_logo() ?> The Candy Store</h1>
    </header>
    <article>
        <h2>Welcome to the Candy Store</h2>
    </article>
    <footer>
        <?php notice() ?>
        <?php write_logo() ?>
    </footer>
</body>

</html>