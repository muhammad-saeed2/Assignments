<?php
session_start();

if(isset($_POST['username']))
{
    $_SESSION['username'] = $_POST['username'];

    header("Location: dashboard.php");
}
?>
<h1>Session Login</h1>

<form method="post">

Username:
<input type="text" name="username" required>

<br><br>

<input type="submit" value="Login">

</form>
