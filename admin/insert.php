<?php
  include('../connection.php');

  if ($_POST) {
    $full_name = $_POST['full_name'];
    $nic = $_POST['nic'];
  }

  $sql = "INSERT INTO `log`(`full_name`, `nic`) VALUES ('$full_name','$nic'),
  INSERT INTO 'log' ('service_name') VALUES ('ابلاغ عن تغيير العنوان');";

  // Execute the SQL INSERT statement
  if ($database->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $database->error;
  }
  $database->close();
?>