<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $fact = 1;

    // multiply fact by each number up to the entered value
    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }
}
?>

    <h1>Factorial Calculator</h1>

    <form method="post" action="">
        Enter a number: <input type="num" name="num" required>
        <button type=submit>Calculate</button>
    </form>

    <?php if (isset($fact)) { ?>
        <h3>Factorial of <?php echo $num; ?> is <?php echo $fact; ?></h3>
    <?php } ?>

</body>
</html>