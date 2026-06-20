<h1>Voting Eligibility Check</h1>

<form method="post">
  Enter your age: <input type="number" name="age"> <br>
  <input type="submit" name="submit" value="Check">
</form>

<?php
if(isset($_POST['submit'])){
    $age = $_POST['age'];

    if($age >= 18){
        echo "You are eligible to vote";
    }else{
        echo "You are not eligible to vote";
    }
}
?>