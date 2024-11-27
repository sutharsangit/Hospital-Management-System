<?php
// Replace these variables with your actual database credentials
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $dname = $_POST['dname'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO appoint (pname, email, dname, date, time)
    VALUES ('$pname', '$email', '$dname', '$date', '$time')";

    if ( mysqli_query($conn,$sql) === TRUE) 
      echo "<script> alert(' Appointment Successfully ')</script>";
     else
        echo ("Error: " . $sql . "<br>" . $conn->error);  
}

// Close the connection
$conn->close();
?>
