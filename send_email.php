<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email address
    $to = "sp377463@gmail.com";

    // Compose email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "<script>alert('Your message has been sent.');</script>";
        echo "<script>window.location = 'index.html';</script>";
    } else {
        // Email sending failed
        echo "<script>alert('Unable to send email. Please try again later.');</script>";
        echo "<script>window.location = 'index.html';</script>";
    }
}
?>
