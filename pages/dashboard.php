<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .dashboard-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        
        .welcome {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .nav-links {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 16px;
            color: #3498db;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="welcome">
            Selamat datang, <?php echo $_SESSION['username']; ?>!
        </div>
        <div class="nav-links">
            <a href="buku_tamu.php">Isi Buku Tamu</a>
            <a href="data_tamu.php">Lihat Data Tamu</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
