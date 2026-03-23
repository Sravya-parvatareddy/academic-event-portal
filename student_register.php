<?php
include("config.php");

if(isset($_POST['register']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];

$query = "INSERT INTO students(name,email,password,department)
VALUES('$name','$email','$password','$department')";

if(mysqli_query($conn,$query))
{
echo "Registration Successful";
}
else
{
echo "Error: " . mysqli_error($conn);
}
}
?>

<h2>Student Registration</h2>

<form method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

Department:<br>
<input type="text" name="department" required><br><br>

<button type="submit" name="register">Register</button>

</form>