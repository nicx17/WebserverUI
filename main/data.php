<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["value"] ?? "none";
    file_put_contents("data.txt", $value);
    echo "Received: $value";
} else {
    echo "Send a POST request with 'value'";
}
?>
