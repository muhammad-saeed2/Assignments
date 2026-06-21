<h1>User Information</h1>

<form method="get">

Name:
<input type="text" name="name" required>

<br><br>

Email:
<input type="email" name="email" required>

<br><br>

<input type="submit" value="Submit">

</form>

<?php

if(isset($_GET['name']) && isset($_GET['email']))
{
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "<h3>Submitted Information</h3>";

    echo "Name: ".$name."<br>";
    echo "Email: ".$email;
}

?>
