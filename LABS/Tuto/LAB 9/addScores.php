<?php

include 'config.php';

$sql = "SELECT * FROM Students";
$statement = $conn -> prepare($sql);
$statement->execute();
$students = $statement->fetchAll();


?>


<!DOCTYPE html>
<html>

<body>
    
    <form method="POST" action="grader.php">
    Student    
    <input list="students" name="id">
        <datalist id="students">
        <?php
            foreach ($students as $student) {
                echo ("<option value='$student[StudentID]'>");
            }


        ?>




        </datalist>

        <h1>Enter Scores:</h1>

        Score 1 <input type="text" name="score1" /><br />
        Score 2 <input type="text" name="score2" /><br />
        Score 3 <input type="text" name="score3" /><br />
        Score 4 <input type="text" name="score4" /><br />
        Score 5 <input type="text" name="score5" /><br />
        Score 6 <input type="text" name="score6" /><br /><br />
        <input type="submit">
    </form>
</body>

</html>