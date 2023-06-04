<?php

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

include 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)) {

if(isset($_POST['update'])){
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];
        $score4 = $_POST["score4"];
        $score5 = $_POST["score5"];
        $score6 = $_POST["score6"];
        $studentID = $_POST['studentId'];
        $scoreID = $_POST['scoreId'];

        $scores = array($score1, $score2, $score3, $score4, $score5, $score6);
        $averageScore = calculateAverage($scores);
        $grade = checkGrade($averageScore);

        try{

            $conn -> beginTransaction();

            $sql = "UPDATE Scores SET Score1 = '$score1', Score2 = '$score2', Score3 = '$score3', Score4 = '$score4', Score5 = '$score5', Score6 = '$score6', Average = '$averageScore', Grade = '$grade' WHERE ScoreID = '$scoreID' AND StudentID = '$studentID'";

            $conn -> query($sql);

            $conn -> commit();

            echo "<br><br>Record updated successfully for " . $studentID ;
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
            $conn->rollBack();
        }
} else {

    $scoreID = $_POST['scoreId'];
    $studentId = $_POST['studentId'];
    try{

        $conn -> beginTransaction();

        $sql = "DELETE FROM Scores WHERE ScoreID = '$scoreID' ";

        $conn -> query($sql);

        $conn -> commit();

        echo "<br><br>Record deleted successfully for " . $studentId;
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
        $conn->rollBack();
    }

}
}

?>

<br><br>

<a href="addScores.php">Add Scores</a>

