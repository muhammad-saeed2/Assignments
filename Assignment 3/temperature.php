<h1>Temperature Converter</h1>

<form method="post">

Enter Temperature:
<input type="text" name="temp" required>

<br><br>

<select name="choice">
    <option value="1">Celsius to Fahrenheit</option>
    <option value="2">Fahrenheit to Celsius</option>
</select>

<br><br>

<input type="submit" value="Convert">

</form>

<?php

function celsiusToFahrenheit($c)
{
    return ($c * 9/5) + 32;
}

function fahrenheitToCelsius($f)
{
    return ($f - 32) * 5/9;
}

if(isset($_POST['temp']))
{
    $temp = $_POST['temp'];
    $choice = $_POST['choice'];

    echo "<h3>Result</h3>";

    if($choice == 1)
    {
        echo celsiusToFahrenheit($temp)." °F";
    }
    else
    {
        echo fahrenheitToCelsius($temp)." °C";
    }
}

?>
