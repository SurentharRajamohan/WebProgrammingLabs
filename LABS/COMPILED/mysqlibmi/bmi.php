<?php
include 'config.php';

function calculateBMI($height, $weight){
    return $height * $weight;
}




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];


    $bmi = calculateBMI($height, $weight);

    try{
        $conn -> begin_transaction();
        $sql = "INSERT INTO records (name, gender, height, weight, bmi) VALUES ('$name', '$gender', '$height', '$weight', '$bmi')";
        $conn->query($sql);
        $conn->commit();

    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
        $conn->rollback();
    }

    $sql = "SELECT * FROM records ORDER BY BMI ASC";
    $statement = $conn -> prepare($sql);
    $statement->execute();
    $result = $statement->get_result();
    $records = $result->fetch_all(MYSQLI_ASSOC);
    


}






?>

<html>
<body>
<table>
<tr>
    <th>Name</th>
    <th>Gender</th>
    <th>Waist</th>
    <th>Hip</th>
    <th>BMI</th>
    
<tr>
<?php
            foreach ($records as $record) {
                echo ("<tr>
                <td>$record[Name]</td>
                <td>$record[Gender]</td>
                <td>$record[Height]</td>
                <td>$record[Weight]</td>
                <td>$record[BMI]</td>
                </tr>
                ");
            }


?>
</table>




</body>
</html>