<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient, subject, and email body
    $to = "webmasterspainsailing@gmail.com";
    $subject = "Spain Sailing Inquiry";

    // Construct the email body as HTML
    $body = "
        <html>
        <head>
            <title>Spain Sailing Inquiry</title>
        </head>
        <body>
            <p><strong>From:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";

    // Set content-type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error. If trying again doesn't work, please email us to report the problem.";
    }
}
?>
