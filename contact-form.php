<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["firstname"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $message = $_POST["subject"];

    // Email recipient
    $to = "soumilic02@gmail.com"; // Replace with your email address

    // Email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $messageBody = "Name: $name\nEmail: $email\nCountry: $country\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $messageBody)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Redirect to an error page if accessed directly without POST data
    header("Location: error.html");
}
?>
