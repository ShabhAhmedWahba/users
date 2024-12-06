<?php

$conn = new mysqli('localhost', 'root', '', 'useres_app');

// تحقق من وجود خطأ في الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
