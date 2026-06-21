<h1>Login Form</h1>

<form method="post">

Username:
<input type="text" name="username" required>

<br><br>

Password:
<input type="password" name="password" required>

<br><br>

<input type="submit" value="Login">

</form>

<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<h3>Entered Details</h3>";

    echo "Username: ".$username."<br>";
    echo "Password: ".$password;
}
?>
