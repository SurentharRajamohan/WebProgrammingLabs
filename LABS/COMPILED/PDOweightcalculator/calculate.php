<?php
include 'config.php';

function calculateRatio($waist, $hip){
    $ratio = $waist / $hip;
    return $ratio;
}


function checkHealthRisk($ratio, $gender){
if($gender == 'male'){
    if($ratio <= 0.95){
        return "Low Risk";
    }else if($ratio > 0.95 && $ratio < 1){
        return "Moderate Risk";
    }else if($ratio > 1){
        return "High Risk";
    }
}else if($gender == 'female'){
    if($ratio < 0.8){
        return "Low Risk";
    }else if($ratio >= 0.8 && $ratio <= 0.85){
        return "Moderate Risk";
    }else if($ratio >= 0.85){
        return "High Risk";
    }
}
}






if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["name"]) && isset($_POST["gender"]) && isset($_POST["waist"]) && isset($_POST["hip"])){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $waist = $_POST["waist"];
    $hip = $_POST["hip"];

    if(is_numeric($waist) && is_numeric($hip)){

    $ratio = calculateRatio($waist, $hip);
    $ratio = round($ratio, 3);

    $healthRisk = checkHealthRisk($ratio, $gender);

    echo "<h1>Hi, $name, your WHR is $ratio</h1>";
    echo "<p>Your health risk is $healthRisk based on WHR</p>";
    
   
   try{ 
    $conn->beginTransaction();
    $sql = "INSERT INTO records (name, gender, waist, hip, whr, healthRisk) VALUES ('$name', '$gender', '$waist', '$hip', '$ratio', '$healthRisk')";
    $conn->query($sql);
    $conn->commit();

   }catch(Exception $e){
       echo "Error: " . $e->getMessage();
       $conn->rollback();
   }
   
    $sql = "SELECT * FROM records ORDER BY whr ASC";
    $statement = $conn -> prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll();
   


}else{
        echo "<h1>Invalid input</h1>";
    }
}else{
    echo "<h1>Invalid input</h1>";
}

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
    <th>WHR</th>
    <th>Health Risk</th>
<tr>
<?php
            foreach ($records as $record) {
                echo ("<tr>
                <td>$record[Name]</td>
                <td>$record[Gender]</td>
                <td>$record[Waist]</td>
                <td>$record[Hip]</td>
                <td>$record[WHR]</td>
                <td>$record[HealthRisk]</td>
                </tr>
                ");
            }


?>
</table>




</body>
</html>