<!-- grader -->
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





<!-- Print name -->
<?php

function printName($firstName, $lastName, $repeat)  {
    for ($i = 0 ; $i < $repeat; $i++) {
        echo("$firstName $lastName <br>");
    }
}


printName('John', 'Smith', 10);

?>

<!-- Print object -->
<?php
class Person {
    public $firstName;
    public $lastName;

    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function printName($num) {
        for ($i = 0 ; $i < $num; $i++) {
            echo("$this->firstName $this->lastName <br>");
        }
    }
}

$person1 = new Person('Kamal', 'Hassan');
$person1->printName(10);
?>

<!-- Reverse sum -->
<?php

function reverseNumber(int $num): int {
   $reversedInteger = 0;
    while($num > 0){
        $temp = $num % 10;
        $reversedInteger = $reversedInteger * 10 + $temp;
        $num = intdiv($num, 10);
   }
   return $reversedInteger;
}

function addNumbers(int $a, int $b): int {
    return reverseNumber($a) + reverseNumber($b);
}

$result = addNumbers(130, 15);
echo $result;


?>

<?php



?>