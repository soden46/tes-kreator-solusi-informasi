<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarif Syarifuddin PHP 02</title>
</head>

<body>

    <?php
    $username = $password = $loginErr = "";
    $inputPassword = $ubahTeks = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $loginErr = "Username tidak boleh kosong";
        } else {
            $username = $_POST["username"];
        }

        if (empty($_POST["password"])) {
            $loginErr = "Password tidak boleh kosong";
        } else {

            $inputPassword = $_POST["password"];
            if ($ubahTeks != TeksUbah($inputPassword)) {
                echo "Login Gagal, Password Salah!";
            } else {
                echo "Login berhasil!";
            }
        }
    }

    function TeksUbah($text)
    {
        $length = strlen($text);
        $reversed = "";
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $text[$i];
        }
        return $reversed;
    }
    ?>

    <h2>Syarif Syarifuddin PHP 02</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="username" value="<?php echo $username; ?>">
        <br><br>

        Password: <input type="password" name="password" value="<?php echo $password; ?>">
        <br><br>

        <input type="submit" name="submit" value="Login">
        <span class="error"><?php echo $loginErr; ?></span>
    </form>

</body>

</html>