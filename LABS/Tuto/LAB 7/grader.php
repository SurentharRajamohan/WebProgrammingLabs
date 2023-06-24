<!DOCTYPE html>
<html>
<body>

<?php
$scores = array(80, 53, 78, 69, 100, 89, 13);

$sum = 0;
echo "Average score for [";
for ($i = 0; $i < count($scores); $i++){
$sum = $sum + $scores[$i];
echo $scores[$i]." ";
}

$average = round(($sum / count($scores)),1);


echo "] is " . number_format($average, 2) . "<br>";


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

echo "Average grade is " . $averageGrade;
?>

</body>
</html>