<?php
  session_start();
  
  if (isset($_POST["login"])) {
    // Authenticate user, set session variables
    $_SESSION["username"] = "user123";
  }
  
  if (isset($_POST["logout"])) {
    // Destroy session
    session_unset();
    session_destroy();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Session Management</title>
</head>
<body>
  <?php if (isset($_SESSION["username"])): ?>
    <p>Welcome, <?php echo $_SESSION["username"]; ?></p>
    <form method="post" action="">
      <input type="submit" name="logout" value="Logout">
    </form>
  <?php else: ?>
    <form method="post" action="">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="login" value="Login">
    </form>
  <?php endif; ?>
</body>
</html>
