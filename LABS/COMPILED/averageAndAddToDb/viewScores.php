<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET)){

$id = $_GET['id'];
$sql = "SELECT * FROM Scores WHERE ScoreID = $id";
$statement = $conn -> prepare($sql);
$statement->execute();

$result = $statement ->fetch(PDO::FETCH_ASSOC);

}
?>
<br><br>

<a href="addScores.php">Add New Scores</a>

<!DOCTYPE html>
<html>

<body>
    
    <form method="POST" action="editScores.php">
        
<input type="hidden" name="scoreId" value="<?php echo $id;?>">
<input type="hidden" name="studentId" value="<?php echo $result['StudentID'];?>">
     
        <h1>Enter Scores:</h1>

        Score 1 <input type=""text name="score1" value="<?php echo $result['Score1']?>"/><br />
        Score 2 <input type="text" name="score2" value="<?php echo $result['Score2']?>"/><br />
        Score 3 <input type="text" name="score3" value="<?php echo $result['Score3']?>"/><br />
        Score 4 <input type="text" name="score4" value="<?php echo $result['Score4']?>"/><br />
        Score 5 <input type="text" name="score5" value="<?php echo $result['Score5']?>"/><br />
        Score 6 <input type="text" name="score6" value="<?php echo $result['Score6']?>"/><br /><br />
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">

    </form>
</body>

</html>