<!DOCTYPE html>
<html>

<body>



    <h1>Enter Scores:</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Score 1 <input type="text" name="score1" /><br />
        Score 2 <input type="text" name="score2" /><br />
        Score 3 <input type="text" name="score3" /><br />
        Score 4 <input type="text" name="score4" /><br />
        Score 5 <input type="text" name="score5" /><br />
        Score 6 <input type="text" name="score6" /><br /><br />
        
        <?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];
    $score4 = $_POST["score4"];
    $score5 = $_POST["score5"];
    $score6 = $_POST["score6"];
    
    
    function calculateAverage($scores) {
        $sum = array_sum($scores);
        $arrayLength = count($scores);
        $average = $sum / $arrayLength;
        
        return round($average, 2);
    }
    
    function checkGrade($average) {
    
    $averageGrade = "";
    
    if ($average >= 80 && $average <=100) {
        $averageGrade = "A";
    } elseif ($average >= 60 && $average <=79) {
        $averageGrade = "B";
    } elseif ($average >= 40 && $average <=59) {
        $averageGrade = "C";
    } elseif ($average >= 20 && $average <=39) {
        $averageGrade = "D";
    }  elseif ($average >= 1 && $average <=19) {
        $averageGrade = "E";
    } else {
        $averageGrade = "F";
    }
    
    return $averageGrade;
    }
    
    $scores = array($score1, $score2, $score3, $score4, $score5, $score6);
    $averageScore = calculateAverage($scores);
    $grade = checkGrade($averageScore);
    
    echo "Average score for [" . implode(" ", $scores) . "] is " . $averageScore . "<br>";
    echo "Average grade is " . $grade;
    
    }
    

?>
        <br /><br />
        <input type="submit">
    </form>




</body>

</html>