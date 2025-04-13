<?php
if (isset($_POST['value'])) {
    file_put_contents(__DIR__ . "/ramdisk/data.txt", $_POST['value'], LOCK_EX);
}
?>