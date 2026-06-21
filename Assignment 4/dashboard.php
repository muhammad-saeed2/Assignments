<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}
?>

<h1>Dashboard</h1>

<?php

echo "Welcome ".$_SESSION['username'];

?>

<br><br>

<a href="logout.php">Logout</a>
