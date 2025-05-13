<!-- auth/login.php -->
<?php
session_start();
require_once '../includes/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['role'] = $user['role'];
    $_SESSION['username'] = $user['username'];

    if ($user['role'] === 'admin') {
        header("Location: /admin/dashboard.php");
    } else {
        header("Location: /user/dashboard.php");
    }
    exit;
} else {
    header("Location: /pages/login.html?error=1");
    exit;
}
?>
