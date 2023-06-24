<!DOCTYPE html>
<html>
<body>

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

</body>
</html>
