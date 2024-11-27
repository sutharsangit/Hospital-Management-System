<?php
include 'dbconnection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url("pic2.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            background-color: #f0f0f0; /* Light gray background color */
            font-family: Arial, sans-serif; /* Use Arial font */
        }
        .navbar {
            background-color: rgba (255,255,255,0.5);
            backdrop-filter:blur(50px);
            font-family: calibri; padding-right: 15px;padding-left: 15px;padding-top: 15px;
            padding-bottom: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            border-radius: 15px;
        }
        
        .navbar-brand, .nav-link {
            color: blue !important; /* White color for navbar text */
            font-size:20px;
        }
        .navbar-toggler-icon {
            background-color: blue; /* White color for navbar toggler icon */
        }
        .logo{
            box-shadow: 0 5px 5px rgb(194, 226, 225) ;
        }
        .logo a{
            font-size: 30px; font-weight: 600; color: blue;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
            border: 1px solid #ccc; /* Gray border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
            background-color: #fff; /* White background color */
        }
        .welcome {
            color: #3498db; /* Blue color for welcome message */
            font-size: 24px;
            font-weight: bold;
        }
        .logout-link {
            color: #e74c3c; /* Red color for logout link */
            font-size: 18px;
        }
        .d2 img {
            max-width: 100%;
            height: auto;
            box-shadow: 5px 5px 20px rgb(150, 150, 150),-5px 5px 20px  rgb(150, 150, 150),5px -5px 20px  rgb(150, 150, 150),-5px -5px 20px  rgb(150, 150, 150);
        }
        li{
    list-style: none;
     display: inline-block;  
    margin-right: 25px;
}
li a{
    color: rgb(14, 143, 136); 
    font-size: 25px; 
    font-weight: bold;
    padding: 10px;
    text-align: center;
}

li.z{
    background-color: rgb(14, 143, 136);
    border-radius: 20px;
    padding: 5px;
}

li.z a{
    padding: 20px;
    color:white;
}

li.zz{
    background-color: rgb(14, 143, 136);
    border-radius: 20px;
    padding: 5px;
}

li.zz a{
    padding: 20px;
    color:white;
}
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="logo"><a href="#"><img src="logo.png"></a> </div>
        <div class="container">
            <a class="navbar-brand" href="#">Doctor Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctappo.php">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docresponse.php">Patients Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link logout-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    
    </nav>

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome, <?=$_SESSION['name']?></h5>
                        <p class="card-text"><section></p>
                        <h1>About Our Doctor's Website</h1>
                        <div class="d2">
                          <img src="hd4.jpg" alt="Doctor's Website Image">
                        </div>
            <h2>About Us</h2>
            <p>Welcome to our doctor's website! We are dedicated to providing excellent healthcare services and improving patient-doctor communication.</p>
        </section>

        <section>
            <h2>Features</h2>
            <ul>
                <li>Appointment Management: Easily manage and schedule appointments with patients.</li>
                <li>Patient Messaging: Communicate securely with patients using our messaging system.</li>
            </ul>
        </section></p>
                        <!-- Add more content as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
