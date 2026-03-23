<?php
session_start();
include("config.php");

if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM students WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0)
{
$_SESSION['student_email'] = $email;
header("Location:view_events.php");
}
else
{
echo "Invalid Email or Password";
}
}
?>

<h2>Student Login</h2>

<form method="POST">

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button type="submit" name="login">Login</button>

</form>

<br>

<a href="student_register.php">New Student? Register Here</a>