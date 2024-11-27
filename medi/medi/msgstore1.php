<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $_POST["name"];
    $selectedDoctor = $_POST["selecteddoctor"];
    $healthCondition = $_POST["healthCondition"];
    $message = $_POST["docmsg"];

    // Insert the message into the database
    $sql = "UPDATE health SET docmsg = ? WHERE selecteddoctor = ? AND healthcondition = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $message, $selectedDoctor, $healthCondition);

    if ($stmt->execute()) {
        echo "Message stored successfully!";
    } else {
        echo "Error storing message!";
    }
}
?>
