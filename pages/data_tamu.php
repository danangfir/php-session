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
    <title>Data Tamu</title>
</head>
<body>
    <h2>Daftar Tamu</h2>
    <?php
    $file = fopen("../data/tamu.txt", "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            echo nl2br($line);
        }
        fclose($file);
    } else {
        echo "Tidak ada data tamu yang tersedia.";
    }
    ?>
    <br><br>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>
