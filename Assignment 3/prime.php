<h1>Check Prime Number</h1>

<form method="post">
    Enter a Number:
    <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>

<?php

function checkPrime($num)
{
    if($num <= 1)
    {
        return "$num is not a prime number.";
    }

    for($i = 2; $i < $num; $i++)
    {
        if($num % $i == 0)
        {
            return "$num is not a prime number.";
        }
    }

    return "$num is a prime number.";
}

if(isset($_POST['number']))
{
    $number = $_POST['number'];

    echo "<br>";
    echo checkPrime($number);
}

?>
