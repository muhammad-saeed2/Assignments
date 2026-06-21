<h1>Reverse a String</h1>

<form method="post">

Enter a String:
<input type="text" name="text" required>

<input type="submit" value="Reverse">

</form>

<?php

function reverseString($str)
{
    return strrev($str);
}

if(isset($_POST['text']))
{
    $text = $_POST['text'];

    echo "<br>";
    echo "Original String: ".$text."<br>";
    echo "Reversed String: ".reverseString($text);
}

?>
