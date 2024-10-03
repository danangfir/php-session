<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Misalnya username dan password yang valid adalah admin
if ($username == 'danang' && $password == 'firmanto') {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Login gagal. Username atau password salah.";
}
?>
