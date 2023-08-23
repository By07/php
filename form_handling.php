<?php
  $errors = [];
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username)) {
      $errors[] = "Username is required";
    }
    
    if (empty($password)) {
      $errors[] = "Password is required";
    }
    
    if (empty($errors)) {
      // Perform login or registration logic
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Handling</title>
</head>
<body>
  <form method="post" action="">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Submit">
  </form>
  <?php
    if (!empty($errors)) {
      echo "<ul>";
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
      echo "</ul>";
    }
  ?>
</body>
</html>
