<?php
include "../config.php";

if(isset($_POST['login'])){

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM admin
WHERE username='$user'
AND password='$pass'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

header("Location: dashboard.php");

}
else{

echo "Login Failed";

}

}

?>

<form method="POST">

<h2>Admin Login</h2>

<input type="text"
name="username"
placeholder="Username">

<br><br>

<input type="password"
name="password"
placeholder="Password">

<br><br>

<button name="login">
Login
</button>

</form>
