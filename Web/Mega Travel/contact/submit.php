<?php
// Database connection
$servername = "localhost";
$username = "root"; // your DB username
$password = ""; // your DB password
$dbname = "book_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    // Execute the query
    if ($stmt->execute()) {
        echo "<br><h4>Message sent successfully!</h4><br>";
    } else {
        echo "<br><h4>Error Submission</h4><br>: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
