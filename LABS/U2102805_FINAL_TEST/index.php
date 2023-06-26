<?php
include 'config.php';


     
$sql = "SELECT * FROM patients ORDER BY 
CASE
    WHEN ulevel = 'Major' THEN 1
    WHEN ulevel = 'Moderate' THEN 2
    ELSE 3
END,pname ASC";

    $statement = $conn -> prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll();
   








?>
<html>
<style>
table {
        border-collapse: collapse;
    }
    
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<h1>Patient Register</h1>
<a href="add.php">Add a new patient</a></br></br></br>
<table>
<tr>
    <th>Patient Name</th>
    <th>Triage Category</th>
    <th>Vital Signs</th>
    <th>Urgency Score</th>
    <th>Urgency Level</th>
    <th>Emergency Response</th>
<tr>
<?php
            foreach ($records as $record) {
                echo ("<tr>
                <td>$record[pname]</td>
                <td>$record[tcategory]</td>
                <td>$record[vsigns]</td>
                <td>$record[uscore]</td>
                <td>$record[ulevel]</td>
                <td>$record[eresponse]</td>
                </tr>
                ");
            }


?>
</table>




</body>
</html>