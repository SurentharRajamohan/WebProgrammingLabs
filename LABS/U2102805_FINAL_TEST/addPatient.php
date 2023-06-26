<?php
include 'config.php';

function calculateUrgencyScore($tcategory, $vsigns){
    $uscore = $tcategory * $vsigns;
    return $uscore;
}


function assessUrgencyLevel($tcategory, $vsigns){
    $ulevel = "Undefined";
    if(($tcategory == 1 && $vsigns == 1) || ($tcategory == 2 && $vsigns == 1) || ($tcategory == 1 && $vsigns == 2)){
        $ulevel = "minor";
    }else if(($tcategory == 1 && $vsigns == 3) || ($tcategory == 2 && $vsigns == 2) || ($tcategory == 3 && $vsigns == 1)){
        $ulevel = "moderate";
    }else if(($tcategory == 2 && $vsigns == 3) || ($tcategory == 3 && $vsigns == 2) || ($tcategory == 3 && $vsigns == 3)){
        $ulevel = "major";
    }

    return $ulevel;
}



if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["pname"]) && isset($_POST["tcategory"]) && isset($_POST["vsigns"]) && isset($_POST["eresponse"])){
    $name = $_POST["pname"];
    $tcategory = $_POST["tcategory"];
    $vsigns = $_POST["vsigns"];
    $eresponse = $_POST["eresponse"];

    if((is_numeric($vsigns) && is_numeric($tcategory)) && ($tcategory >= 1 && $tcategory <= 3) && ($vsigns >= 1 && $vsigns <= 3)){

    $uscore = calculateUrgencyScore($tcategory, $vsigns);
    

    $ulevel = assessUrgencyLevel($tcategory, $vsigns);


    try{ 
        $conn->beginTransaction();
        $sql = "INSERT INTO patients (pname, tcategory, vsigns, uscore, ulevel, eresponse) VALUES ('$name', '$tcategory', '$vsigns', '$uscore', '$ulevel', '$eresponse')";
        $conn->query($sql);
        $conn->commit();
    
       }catch(Exception $e){
           echo "Error: " . $e->getMessage();
           $conn->rollback();
       }

       
    echo"<h3 style='color: green;'>New patient added successfully</h5>";
    echo "<p style='color: green;'>Patient Name: $name</p>";
    echo "<p style='color: green;'>Triage Category: $tcategory</p>";
    echo "<p style='color: green;'>Vital signs: $vsigns</p>";
    echo "<p style='color: green;'>Emergency Response: $eresponse</p>";
    echo "<p style='color: green;'>Urgency Score: $uscore</p>";
    echo "<p style='color: green;'>Urgency Level: $ulevel</p>";
    echo "<a href='index.php'>View patient register</a>";
   
   

   


}else{
        echo "<h1>Invalid input</h1>";
        echo "<a href='add.php'>Back to add</a>";
    }
}else{
    echo "<h1>Invalid input</h1>";
    echo "<a href='add.php'>Back to add</a>";
}

}




?>