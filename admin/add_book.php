<?php
include "../config.php";

if(isset($_POST['submit'])){

$title = $_POST['title'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$copies = $_POST['copies'];

$query = "INSERT INTO books
(title,author,isbn,copies)
VALUES
('$title','$author','$isbn','$copies')";

mysqli_query($conn,$query);

echo "Book Added";

}

?>

<form method="POST">

<input name="title" placeholder="Book Title">

<br>

<input name="author" placeholder="Author">

<br>

<input name="isbn" placeholder="ISBN">

<br>

<input name="copies" placeholder="Copies">

<br>

<button name="submit">
Add Book
</button>

</form>
