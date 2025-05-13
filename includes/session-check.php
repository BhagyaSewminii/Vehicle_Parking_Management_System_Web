<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: /templates/login.html");
    exit;
}
?>
