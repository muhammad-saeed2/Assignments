<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $sum = 0;

    // keep adding i to sum until we reach the entered number
    for ($i = 1; $i <= $num; $i++) {
        $sum = $sum + $i;
    }
}
?>
    <h1>Sum of Natural Numbers</h1>

    <form method="post" action="">
        Enter a positive number: <input type="number" name="num" required>
        <button type=submit>Calculate</button>
    </form>

    <?php if (isset($sum)) { ?>
        <h3>Sum of numbers from 1 to <?php echo $num; ?> is <?php echo $sum; ?></h3>
    <?php } ?>
