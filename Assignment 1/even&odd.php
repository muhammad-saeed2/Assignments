<h1>Check Even or Odd</h1>

<form method="post">
  Enter a number: <input type="number" name="num"> <br>
  <button type="submit" name="submit">Check Number</button>
</form>

<?php
if(isset($_POST['submit'])){
    $num = $_POST['num'];

    if($num % 2 == 0){
        echo "$num is an Even number.";
    }
    else{
        echo "$num is an Odd number.";
    }
}
?>
