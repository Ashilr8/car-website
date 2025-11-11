<?php
// Database configuration
$host = 'localhost'; // Usually localhost
$dbname = 'automotive'; // Your database name
$username = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP (usually empty)

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if ($stmt->execute()) {
    // Send email to admin
    $to = 'ashilrampersad2@gmail.com'; // Replace with the admin's email address
    $subject = 'New Contact Form Submission';
    $body = "You have received a new message from the contact form:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Message:\n$message\n";
    
    // Additional headers
    $headers = "From: ashilrampersad2@gmail.com\r\n"; // Replace with a valid sender email

    if (mail($to, $subject, $body, $headers)) {
        echo "New record created successfully and email sent.";
    } else {
        echo "New record created successfully but email could not be sent.";
    }
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
<?php
$to = "recipient@example.com";
$subject = "Test Email";
$message = "This is a test email sent from localhost using XAMPP.";
// REMOVE THIS LINE:  $headers = "From: your_email@gmail.com";  <-- REMOVE THIS
$headers = "";  // Leave it empty for testing

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>
