<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $table = "";
    
    for ($i = 1; $i <= 10; $i++) {
        $ans = $num * $i;
        $table .= $num . " x " . $i . " = " . $ans . "<br>";
    }
}
?>
    <h1>Multiplication Table Generator</h1>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <button type="submit">Calculate</button>
    </form>

    <?php if (isset($table)) { ?>
        <h3>Multiplication Table of <?php echo $num; ?>:</h3>
        <p><?php echo $table; ?></p>
    <?php } ?>