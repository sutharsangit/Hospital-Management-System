<?php
// Database connection details
include "dbconnection.php";

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dname = $_POST['dname'];
    $ddate = $_POST['ddate'];
    $dtime = $_POST['dtime'];

    // You should perform additional validation and sanitization here before using the data in your SQL query

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO remainde (dname, ddate, dtime) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $dname, $ddate, $dtime);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Reminder set successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
