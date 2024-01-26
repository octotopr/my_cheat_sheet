<?php
include "classes/Account.php";
include "classes/Customer.php";

$accounts = [
    new Account(13456308, "Checking", -20),
    new Account(98471649, "Savings", 380),
];

$customer = new Customer("Dima", "Stone", "mim@yandex.ru", "Jup!tr345", $accounts);
?>

<?php include "includes/header.php"; ?>
<h2>Name: <b><?= $customer->getFullName() ?></b></h2>
<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>
    <?php foreach ($customer->accounts as $account) { ?>
        <tr>
            <td><?= $account->number ?></td>
            <td><?= $account->type ?></td>
            <?php if ($account->getBalance() >= 0) { ?>
                <td class="credit">
                <?php } else { ?>
                <td class="overdrawn">
                <?php } ?>
                $ <?= $account->getBalance() ?></td>
        </tr>
    <?php } ?>
</table>
<?php include "includes/footer.php"; ?>