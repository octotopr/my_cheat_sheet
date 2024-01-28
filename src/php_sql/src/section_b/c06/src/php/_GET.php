<?php
$cities  = [
    'London' => '48 Store Street, WC1E 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC'    => '1242 7th Street, 10492',
];
?>
<?php include 'includes/header.php' ?>

<?php foreach ($cities as $key => $value) { ?>
    <a href="get-1.php?city=<?= $key ?>"><?= $key ?></a>
<?php } ?>


<?php include 'includes/footer.php' ?>