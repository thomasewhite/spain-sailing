<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];

    if ($code == "JAN15") {
        echo 15;
    } else {
        echo 0;
    }
}
?>
