<h1>Area Calculator</h1>

<form method="post">

Select Shape:

<select name="shape">
    <option value="rectangle">Rectangle</option>
    <option value="triangle">Triangle</option>
    <option value="circle">Circle</option>
</select>

<br><br>

Enter First Value:
<input type="text" name="value1" required>

<br><br>

Enter Second Value (Leave 0 for Circle):
<input type="text" name="value2" required>

<br><br>

<input type="submit" value="Calculate">

</form>

<?php

function rectangleArea($length,$width)
{
    return $length * $width;
}

function triangleArea($base,$height)
{
    return 0.5 * $base * $height;
}

function circleArea($radius)
{
    return 3.1416 * $radius * $radius;
}

if(isset($_POST['shape']))
{
    $shape = $_POST['shape'];
    $v1 = $_POST['value1'];
    $v2 = $_POST['value2'];

    echo "<h3>Result</h3>";

    if($shape=="rectangle")
    {
        echo "Area = ".rectangleArea($v1,$v2);
    }
    elseif($shape=="triangle")
    {
        echo "Area = ".triangleArea($v1,$v2);
    }
    else
    {
        echo "Area = ".circleArea($v1);
    }
}

?>