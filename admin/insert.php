<?php
if(isset($_POST['full_name']) && isset($_POST['nic']) && isset($_POST['page_title'])) {
    include('../connection.php');

    $full_name = $_POST['full_name'];
    $nic = $_POST['nic'];
    $service_name = $_POST['page_title'];

    $full_name = $database->real_escape_string($full_name);
    $nic = $database->real_escape_string($nic);
    $service_name = $database->real_escape_string($service_name);

    $sql = "INSERT INTO `log`(`full_name`, `nic`, `service_name`) VALUES ('$full_name','$nic','$service_name')";

    if ($database->query($sql) === TRUE) {
        // back to the previous page 
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Error: " . $sql . "<br>" . $database->error;
    }

    $database->close();
} else {
    echo "Error: Form data is not submitted.";
}
?>
