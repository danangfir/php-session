<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="buku_tamu.php">Isi Buku Tamu</a><br>
    <a href="data_tamu.php">Lihat Data Tamu</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
