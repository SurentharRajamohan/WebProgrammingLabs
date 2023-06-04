<!DOCTYPE html>
<html>
<body>

<?php

function printName($firstName, $lastName, $repeat)  {
    for ($i = 0 ; $i < $repeat; $i++) {
        echo("$firstName $lastName <br>");
    }
}


printName('John', 'Smith', 10);

?>


</body>
</html>
