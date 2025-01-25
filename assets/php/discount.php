<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];

    if ($code == "JAN15" || $code == "FEB20") {
        echo 15;
    } else {
        echo 0;
    }
}
?>
