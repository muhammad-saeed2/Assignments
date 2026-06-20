<h1>Student Grade Calculator</h1>

<form method="post">
  Enter marks: <input type="number" name="marks">
  <button type="submit" name="submit">Get Grade</button>
</form>

<?php
if(isset($_POST['submit'])){
    $marks = $_POST['marks'];

    if($marks >= 90){
        $grade = "A+1";
    }else if($marks >= 80){
        $grade = "A";
    }else if($marks >= 70){
        $grade = "B";
    }else if($marks >= 60){
        $grade = "C";
    }else if($marks >= 50){
        $grade = "D";
    }else if($marks >= 40){
        $grade = "E";
    }else {
        $grade = "F";
    }
    
    echo "Marks entered: $marks <br>";
    echo "Grade: $grade";
}
?>
