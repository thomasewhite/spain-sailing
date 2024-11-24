<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    $to = "webmasterspainsailing@gmail.com";
    $subject = "New subscription.";
    $body = "$email has subscribed!";

    if (mail($to, $subject, $body)) {
        echo "Thanks for subscribing!";
    } else {
        echo "Error. If trying again doesn't work, please email us to report the problem.";
    }
}
?>