<?php
include 'dbconnection.php';
session_start();
// Retrieve the name of the currently logged-in doctor
$doctorName = isset($_SESSION['name']) ? $_SESSION['name'] : '';

// Retrieve health records for the current doctor
$sql = "SELECT health.selecteddoctor, health.healthcondition
        FROM health
        INNER JOIN sigup ON health.selecteddoctor = sigup.name
        WHERE health.selecteddoctor LIKE '%$doctorName%'";

$result = mysqli_query($conn, $sql);

// Check if records are found
if (mysqli_num_rows($result) > 0) {
    // Records Found, display patient name and message
    $healthRecords = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    // No records found, initialize an empty array
    $healthRecords = [];
}

// Retrieve appointment requests for health guidance from the database
$sql = "SELECT * FROM health";
$result = mysqli_query($conn, $sql);
$appointmentRequests = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Guidance Appointment Response</title>
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

        h1, h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.navbar {
    background-color: #007bff;
    color: #fff;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.navbar-left {
    flex: 1;
    text-align: left;
    padding-left: 20px;
}

.navbar-center {
    flex: 2;
    text-align: center;
}

.navbar-right {
    flex: 1;
    text-align: right;
    padding-right: 20px;
}

.back-button {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

.navbar-title {
    font-size: 20px;
    font-weight: bold;
}

.container h1 {
    color: #333;
}

    </style>
</head>
<body>
<div class="container">
    <!-- Navigation bar -->
    <nav class="navbar">
        <div class="navbar-left">
            <a href="docpage.php" class="back-button">&larr; Back</a>
        </div>
        <div class="navbar-center">
            <span class="navbar-title">Health Guidance Appointment Response</span>
        </div>
        <div class="navbar-right">
            <!-- Dummy space for alignment -->
        </div>
    </nav>
<div class="container">
    <h1>Health Guidance Appointment Response</h1>

    <!-- Display Appointment Requests from Patients -->
    <section>
        <h2>Appointment Requests</h2>
        <?php if (!empty($appointmentRequests)): ?>
            <table>
                <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Health Condition</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($appointmentRequests as $request): ?>
                    <tr>
                        <td><?php echo $_SESSION['name']; ?></td>
                        <td><?php echo $request['healthcondition']; ?></td>
                        <td>
                            <button onclick="acceptAppointment('<?php echo $_SESSION['name']; ?>', '<?php echo $request['healthcondition']; ?>', this.parentNode)">Accept</button>
                            <button onclick="cancelConfirmation(this.parentNode)">Cancel</button>
                            <textarea id="message-<?php echo $request['selecteddoctor']; ?>" rows="3" placeholder="Type your message here"></textarea>

                            <button class="send-button" onclick="sendMessage('<?php echo $_SESSION['name']; ?>', '<?php echo $request['selecteddoctor']; ?>', '<?php echo $request['healthcondition']; ?>')">Send</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No appointment requests found.</p>
        <?php endif; ?>
    </section>

    <!-- Display Accepted/Changed/Cancelled Appointments -->
    <section>
        <h2>Accepted/Changed/Cancelled Appointments</h2>
        <ul id="acceptedAppointments">
            <!-- Placeholder for accepted/changed/cancelled appointments -->
        </ul>
    </section>
</div>
        </div>
<script>
    function acceptAppointment(patientName, healthCondition, row) {
        // Placeholder function for accepting appointment
        // You would typically send a request to the server and update the database
        const acceptedAppointments = document.getElementById('acceptedAppointments');
        const listItem = document.createElement('li');
        listItem.textContent = `Appointment for ${patientName} accepted. Health condition: ${healthCondition}`;
        acceptedAppointments.appendChild(listItem);

        // Enable the textarea and send button
        const textarea = row.querySelector('textarea');
        const sendButton = row.querySelector('.send-button');
        textarea.removeAttribute('disabled');
        sendButton.removeAttribute('disabled');

        // Disable the accept button
        const acceptButton = row.querySelector('.accept-button');
        acceptButton.disabled = true;
    }

    function cancelConfirmation(row) {
        // Ask for confirmation before cancelling appointment
        if (confirm('Are you sure you want to cancel this appointment?')) {
            // Placeholder function for cancelling appointment
            // You would typically send a request to the server and update the database
            const acceptedAppointments = document.getElementById('acceptedAppointments');
            const listItem = document.createElement('li');
            listItem.textContent = `Appointment cancelled.`;
            acceptedAppointments.appendChild(listItem);

            // Disable the buttons in the corresponding row
            const buttons = row.querySelectorAll('button');
            buttons.forEach(button => {
                button.disabled = true;
            });
        }
    }

    function sendMessage(patientName, selectedDoctor, healthCondition) {
        console.log("Sending message...");
        const confirmation = confirm(`Are you sure you want to send the message to ${selectedDoctor}?`);
        if (confirmation) {
            const message = prompt("Enter your message:");
            if (message !== null) {
                console.log("Message to send:", message);
                // Send an AJAX request to store the message in the database
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert("Message sent successfully!");
                        } else {
                            alert("Error sending message!");
                        }
                    }
                };
                xhr.open("POST", "store_message.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(`patientName=${encodeURIComponent(patientName)}&selectedDoctor=${encodeURIComponent(selectedDoctor)}&healthCondition=${encodeURIComponent(healthCondition)}&message=${encodeURIComponent(message)}`);
            }
        }
    }
</script>

</body>
</html>
