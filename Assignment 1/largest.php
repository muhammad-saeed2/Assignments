<h1>Find the Largest Number</h1>

<form method="post">
  First number: <input type="number" name="n1"><br>
  Second number: <input type="number" name="n2"><br>
  Third number: <input type="number" name="n3"><br>
  <button type="submit" name="submit">Compare</button>
</form>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if($n1 >= $n2 && $n1 >= $n3){
        $largest = $n1;
    }else if($n2 >= $n1 && $n2 >= $n3){
        $largest = $n2;
    }else{
        $largest = $n3;
    }

    echo "The largest number is $largest";
}
?>
