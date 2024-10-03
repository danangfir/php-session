<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
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

    <h2>Form Buku Tamu</h2>
    <p><span class="error">* wajib diisi</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span><br><br>

        Email: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br><br>

        Komentar: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <span class="error">* <?php echo $commentErr;?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
