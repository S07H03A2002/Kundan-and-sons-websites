<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation as needed)

    // Process the data (you can send an email, store in a database, etc.)
    
    // Example: Send an email
    $to = "kundanandsons01@.com";  // Replace with your actual email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Send a response to the client (you can customize this message)
    echo "Form submitted successfully! We'll get back to you soon.";
} else {
    // Handle invalid requests (optional)
    http_response_code(400);  // Bad Request
    echo "Invalid request.";
}
?>
