<?php
$username = "Dima";
$user_array = [
    "name" => "Dima",
    "age" => 38,
    "active" => true,
];

class user
{
    public $name;
    public $age;
    public $active;

    public function __construct($name, $age, $active)
    {
        $this->name = $name;
        $this->age = $age;
        $this->active = $active;
    }
}

$user_object = new User("Dima", 38, true);
?>
<?php include "includes/header.php"; ?>
<pre>
    <p>Scalar: <?php var_dump($username); ?></p>
    <p>Array: <?php var_dump($user_array); ?></p>
    <p>Object: <?php var_dump($user_object); ?></p>
</pre>
<?php include "includes/footer.php"; ?>