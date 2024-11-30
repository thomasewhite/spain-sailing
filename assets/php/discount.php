<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];

    if ($code == "discount") {
        echo 5;
    } else {
        echo 0;
    }
}
?>
