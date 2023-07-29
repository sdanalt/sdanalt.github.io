<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['status'])) {
    $status = $_POST['status'];

    // Define the file path where you want to save the file on the server
    $filePath = 'check.txt';

    // Write the status (1 or 0) to the file
    if (file_put_contents($filePath, $status) !== false) {
        echo "Status saved successfully!";
    } else {
        echo "Failed to save the status!";
    }
}
?>
