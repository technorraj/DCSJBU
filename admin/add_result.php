<?php
include "../config.php";

if(isset($_POST['submit'])){

$roll = $_POST['roll'];
$sem = $_POST['semester'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];

$query = "INSERT INTO results
(roll_no,semester,subject,marks)
VALUES
('$roll','$sem','$subject','$marks')";

mysqli_query($conn,$query);

echo "Result Added";

}

?>

<form method="POST">

<input name="roll"
placeholder="Roll Number">

<br>

<input name="semester"
placeholder="Semester">

<br>

<input name="subject"
placeholder="Subject">

<br>

<input name="marks"
placeholder="Marks">

<br>

<button name="submit">
Add Result
</button>

</form>
