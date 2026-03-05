<?php
include "../config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Result</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">

<h2>Search Student Result</h2>

<form method="GET">

<input type="text" name="roll"
placeholder="Enter Roll Number"
class="form-control" required>

<br>

<select name="semester" class="form-control">

<option value="1">Semester 1</option>
<option value="2">Semester 2</option>
<option value="3">Semester 3</option>
<option value="4">Semester 4</option>
<option value="5">Semester 5</option>
<option value="6">Semester 6</option>

</select>

<br>

<button class="btn btn-primary">
Search Result
</button>

</form>

<hr>

<?php

if(isset($_GET['roll'])){

$roll = $_GET['roll'];
$sem = $_GET['semester'];

$query = "SELECT * FROM results
WHERE roll_no='$roll'
AND semester='$sem'";

$result = mysqli_query($conn,$query);

echo "<table class='table'>";
echo "<tr>
<th>Subject</th>
<th>Marks</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['marks']."</td>";
echo "</tr>";

}

echo "</table>";

}

?>

</div>

</body>
</html>
