<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="register.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Register</title>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process the form data

  // Retrieve the entered information
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];

  // Perform any additional tasks with the data, such as storing in a database

  // Display the information
  echo "<div class='container'>";
  echo "<h3>Registration Details:</h3>";
  echo "<table class='table'>";
  echo "<tr><th>Username</th><td>$username</td></tr>";
  echo "<tr><th>Email</th><td>$email</td></tr>";
  echo "<tr><th>Password</th><td>$password</td></tr>";
  echo "<tr><th>Gender</th><td>$gender</td></tr>";
  echo "</table>";
  echo "</div>";
}
?>

<!-- Your existing HTML code for the form -->
<nav class="navbar navbar-default navbar-fixed-top">
  <!-- Navbar content -->
</nav>

<div class="login-pageCenter">
  <div class="form">
    <div class="login">
      <div class="login-header">
        <h3>REGISTER</h3>
        <p>Please enter your credentials to login.</p>
      </div>
    </div>
    <form class="login-form" method="post" action="process.php">
      <input type="text" name="username" placeholder="Username" required/>
      <input type="email" name="email" placeholder="Email" required/>
      <input type="password" name="password" placeholder="Password" required/>
      Female <input type="radio" name="gender" value="female"/>
      Male <input type="radio" name="gender" value="male" checked/> 
      <button type="submit">Register</button>
    </form>
  </div>
</div>

<footer class="text-center">
  <!-- Footer content -->
</footer>

</body>
</html>
