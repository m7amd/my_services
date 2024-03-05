<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];






  // Database Connection 
  include('connection.php');

  // Validate Form 
  $query = "SELECT * FROM admin WHERE email='" . $database->real_escape_string($email) . "' AND password='" . $database->real_escape_string($password) . "'";
  $result = $database->query($query);
  echo '<script>alert("' . $result->num_rows . '")</script>';
  if ($result && $result->num_rows == 1) {
    // Login Success 
    header("Location: ./admin/index.php");
    exit();
  } else {
    // Login Failed 




    session_start();

    // Set the alert message in a session variable
    $_SESSION['alert_message'] = "Your alert message goes here.";

    // Redirect to another HTML page
    header("Location: ./logingui.php");
    exit();
  }
  $database->close();
}
