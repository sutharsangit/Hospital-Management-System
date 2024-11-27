<?php
session_start(); // Start the session

include "dbconnection.php";

$email = $_POST['email'];
$pass = $_POST['password'];

// Check if email and password are provided
if(isset($email) && isset($pass)) {
    // Ensure to use prepared statements to prevent SQL injection

    $sql = "SELECT email, password, usertype,name FROM sigup WHERE email=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['usertype'] = $row['usertype'];
        $_SESSION['name']=$row['name'];
        
        if($_SESSION['usertype'] == 'Doctor') {
            header('location:docpage.php');
            exit();
        } else {
            header('location:mainpage.php');
            exit();
        }
    } else {
        $_SESSION["error"] = "Wrong Username/Password. Try Again!";
        header('location:login.php');
        exit();
    }
} else {
    $_SESSION["error"] = "Email or Password not provided!";
    header('location:login.php');
    exit();
}
?>
