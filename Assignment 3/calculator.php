<h1>Simple Calculator</h1>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php

function addition($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    if ($b == 0)
    {
        return "Cannot divide by zero";
    }

    return $a / $b;
}

if(isset($_POST['num1']) && isset($_POST['num2']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "<h3>Results</h3>";

    echo "Addition = " . addition($num1,$num2) . "<br>";
    echo "Subtraction = " . subtraction($num1,$num2) . "<br>";
    echo "Multiplication = " . multiplication($num1,$num2) . "<br>";
    echo "Division = " . division($num1,$num2);
}

?>
