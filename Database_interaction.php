<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "mydb";
  
  $conn = new mysqli($host, $username, $password, $database);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT id, name, email FROM users";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
  } else {
    echo "No results";
  }
  
  $conn->close();
?>
