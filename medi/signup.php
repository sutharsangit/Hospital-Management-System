<?php
// Check if the form is submitted
include "dbconnection.php";
?> 
<?php


    //$stmt = $conn->prepare("INSERT INTO sigup (name, email, conum, age, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
    //$stmt->bind_param("ssiiss", $name, $email, $conum, $age, $gender, $password);

    // Set parameters and execute the statement
    $name = $_POST["name"];
    $email = $_POST["email"];
    $conum = $_POST["conum"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $query1="INSERT INTO sigup (name, email, phone, age, gender, password) VALUES ('$name','$email','$conum','$age','$gender','$password ')";
    $stmt = mysqli_query($conn,$query1);
    echo "<script> alert('SignUp Successfully');
        window.location.href='login.php';
        </script>";
?>
<title>signup</title>

