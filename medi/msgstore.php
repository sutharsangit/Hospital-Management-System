<?php
// Include the database connection file
include 'dbconnection.php';

// Start the session
session_start();

// Check if the 'name' session variable is set and not null
if(isset($_SESSION['name']) && $_SESSION['name'] !== null) {
    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from the form
        $sel = $_POST['selecteddoctor'];
        $msg = $_POST['healthcondition'];
   
        // Prepare and execute the SQL query to insert data into the database
        $sql = "INSERT INTO health (healthcondition, selecteddoctor,pname) VALUES (?, ?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $msg, $sel, $_SESSION['name']);

        // Check if the query was executed successfully
        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error occurred: " . $stmt->error;
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    }
} else {
    // If 'name' session variable is not set or is null, handle the error accordingly
    echo "Error: 'name' session variable is not set or is null.";
}
?>
