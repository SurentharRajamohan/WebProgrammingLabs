<!DOCTYPE html>
<html>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET"){

    $score1 = $_REQUEST["score1"];
    $score2 = $_REQUEST["score2"];
    $score3 = $_REQUEST["score3"];
    $score4 = $_REQUEST["score4"];
    $score5 = $_REQUEST["score5"];
    $score6 = $_REQUEST["score6"];
    $studentID = $_REQUEST['id'];


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

include 'config.php';

try {
$conn -> beginTransaction();
$sql = "INSERT INTO Scores (StudentID, Score1, Score2, Score3, Score4, Score5, Score6, Average, Grade) VALUES ('$studentID', '$score1', '$score2', '$score3', '$score4', '$score5', '$score6', '$averageScore', '$grade')";

$statement = $conn -> prepare($sql);
$statement->execute();

$sql = "SELECT ScoreID FROM Scores ORDER BY ScoreID DESC LIMIT 1";
$statement = $conn->prepare($sql);
$statement->execute();

$last_id = $statement->fetch()['ScoreID'];

echo "<br> New record has been created. Last inserted ID is $last_id";

$conn->commit();
} catch (Exception $e) {

echo $e->getMessage();
$conn -> rollBack();

}
}

?>

<br><br>
<a href="viewScores.php?id=<?php echo $last_id ?>">View Scores</a>
<br><br>
<a href="addScores.php">Add Scores</a>

</body>
</html>