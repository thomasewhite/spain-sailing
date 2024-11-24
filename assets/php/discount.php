<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];

    if ($code == "discount") {
        echo "Code correct!";
    } else {
        echo "Incorrect code!";
    }
}
?>
