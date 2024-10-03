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
    <title>Data Tamu</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .data-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .data-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .data-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .data-list {
            text-align: left;
            margin-bottom: 20px;
        }

        .data-item {
            background-color: #f1f1f1;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-back {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="data-container">
        <div class="data-box">
            <h2>Data Tamu</h2>
            <div class="data-list">
                <?php
                $file = fopen("../data/tamu.txt", "r");
                if ($file) {
                    while (($line = fgets($file)) !== false) {
                        echo "<div class='data-item'>" . nl2br($line) . "</div>";
                    }
                    fclose($file);
                } else {
                    echo "Tidak ada data tamu.";
                }
                ?>
            </div>
            <a href="dashboard.php" class="btn-back">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
