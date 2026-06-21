<?php

if(isset($_POST['color']))
{
    $color = $_POST['color'];

    setcookie("favcolor",$color,time()+3600);
}

?>

<h1>Favorite Color</h1>

<form method="post">

Enter Favorite Color:

<input type="text" name="color" required>

<br><br>

<input type="submit" value="Save">

</form>

<?php

if(isset($_COOKIE['favcolor']))
{
    echo "<br>";

    echo "Welcome back! Your favorite color is ".$_COOKIE['favcolor'];
}
?>
