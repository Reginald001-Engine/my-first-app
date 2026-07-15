<?php
echo "Hello World from Railway! <br>";

// Test DB connection using Railway variables
$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME'], $_ENV['DB_PORT']);

if ($conn->connect_error) {
  die("DB Connection failed: " . $conn->connect_error);
}
echo "DB Connected Successfully!";
?>
