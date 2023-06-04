<!DOCTYPE html>
<html>
<body>

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
</body>
</html>

