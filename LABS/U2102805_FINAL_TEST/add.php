<!DOCTYPE html>
<html>
<head>
<title>Add new patient</title>
</head>

<body>
<a href="index.php">Home</a><br/><br/>
<h1>Add a new patient</h1>
<p><strong>Enter the patient information: </strong></p>
<form action="addPatient.php" method="post">
<table width="50%">
<tr>
<td>Patient Name</td>
<td><input type="text" name="pname"></td>
</tr>
<tr>
<td> Triage Category </td>
<td><input type="text" name="tcategory"></td>
</tr>
<tr>
<td> Vital Signs </td>
<td><input type="text" name="vsigns"></td>
</tr>
<tr>
<td> Emergency Response </td>
<td><input type="text" name="eresponse"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Add
Patient">
</td>
</tr>
</table>
</form>
</body>
</html>
