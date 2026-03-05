<?php
include "../config.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Library</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>

<div class="container mt-5">

<h2>Library Books</h2>

<form method="GET">

<input type="text"
name="search"
placeholder="Search Book"
class="form-control">

<br>

<button class="btn btn-success">
Search
</button>

</form>

<hr>

<?php

if(isset($_GET['search'])){

$key = $_GET['search'];

$query = "SELECT * FROM books
WHERE title LIKE '%$key%'";

}

else{

$query = "SELECT * FROM books";

}

$result = mysqli_query($conn,$query);

echo "<table class='table'>";

echo "<tr>
<th>Title</th>
<th>Author</th>
<th>ISBN</th>
<th>Copies</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['title']."</td>";
echo "<td>".$row['author']."</td>";
echo "<td>".$row['isbn']."</td>";
echo "<td>".$row['copies']."</td>";

echo "</tr>";

}

echo "</table>";

?>

</div>

</body>
</html>
