<?php
include 'dbconnection.php';
session_start();

// Fetch patient messages and doctor's replies from the database
$sql = "SELECT healthcondition, docmsg FROM health";
$result = mysqli_query($conn, $sql);

// Initialize an array to store the messages
$messages = [];

// Fetch data from the result set and store it in the $messages array
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Add patient message to the array
        $messages[] = [
            'type' => 'patient',
            'message' => $row['healthcondition']
        ];

        // Check if there is a doctor's reply
        if (!empty($row['docmsg'])) {
            // Add doctor's reply to the array
            $messages[] = [
                'type' => 'doctor',
                'message' => $row['docmsg']
            ];
        } else {
            // If no doctor's reply, add a placeholder message
            $messages[] = [
                'type' => 'doctor',
                'message' => "Doctor has not yet seen your message. We will update you soon."
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Messages Response</title>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f7f7f7;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

.message {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
}

.message.patient {
    background-color: #f9f9f9;
}

.message.doctor {
    background-color: #e9f2ff;
}

strong {
    font-weight: bold;
}

textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    padding: 8px 16px;
    border: none;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f7f7f7;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

.message {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.message.patient {
    background-color: #f0f0f0;
}

.message.doctor {
    background-color: #e6f7ff;
}

.message strong {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.message p {
    margin: 0;
}

textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    padding: 8px 16px;
    border: none;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
.back-button {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.back-button:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <div class="container">
    <a href="docpage.php" class="back-button">&lt; Back</a> <!-- Add back navigation button -->
        <h1>Patient Messages</h1>

        <!-- Display Patient Messages and Doctor's Replies -->
        <div id="messages">
            <?php foreach ($messages as $message): ?>
                <div class="message <?php echo $message['type']; ?>">
                    <strong><?php echo ucfirst($message['type']); ?>'s Message:</strong>
                    <p><?php echo $message['message']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>