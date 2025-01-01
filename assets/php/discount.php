<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];

    if ($code == "JAN15") {
        echo 10;
    } else {
        echo 0;
    }
}
?>
