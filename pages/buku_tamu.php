<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>.error {color: #FF0000;}</style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $commentErr = "";
    $name = $email = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Nama harus diisi";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Hanya huruf dan spasi yang diizinkan";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email harus diisi";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format email tidak valid";
            }
        }

        if (empty($_POST["comment"])) {
            $commentErr = "Komentar harus diisi";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($nameErr) && empty($emailErr) && empty($commentErr)) {
            // Simpan data ke file tamu.txt
            $file = fopen("../data/tamu.txt", "a");
            fwrite($file, "Nama: $name | Email: $email | Komentar: $comment\n");
            fclose($file);
            echo "Data berhasil disimpan!";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="form-container">
        <div class="form-box">
            <h2>Buku Tamu</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="input-box">
                    <input type="text" name="name" value="<?php echo $name;?>" required>
                    <label>Nama</label>
                    <span class="error"><?php echo $nameErr;?></span>
                </div>
                <div class="input-box">
                    <input type="text" name="email" value="<?php echo $email;?>" required>
                    <label>Email</label>
                    <span class="error"><?php echo $emailErr;?></span>
                </div>
                <div class="input-box">
                    <textarea name="comment" rows="5" required><?php echo $comment;?></textarea>
                    <label>Komentar</label>
                    <span class="error"><?php echo $commentErr;?></span>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
