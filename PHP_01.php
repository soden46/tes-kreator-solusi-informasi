<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarif Syarifuddin PHP 01</title>
</head>

<body>

    <?php
    function validateInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $namaErr = $alamatErr = $teleponErr = $kelaminErr = "";
    $nama = $alamat = $telepon = $kelamin = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "Nama tidak boleh kosong";
        } else {
            $nama = validateInput($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                $namaErr = "Hanya huruf dan spasi yang diizinkan";
            }
        }

        if (empty($_POST["alamat"])) {
            $alamatErr = "Alamat tidak boleh kosong";
        } else {
            $alamat = validateInput($_POST["alamat"]);
        }

        if (empty($_POST["telepon"])) {
            $teleponErr = "Nomor telepon tidak boleh kosong";
        } else {
            $telepon = validateInput($_POST["telepon"]);
            if (!preg_match("/^[0-9]*$/", $telepon)) {
                $teleponErr = "Hanya angka yang diizinkan";
            }
        }

        if (empty($_POST["kelamin"])) {
            $kelaminErr = "Jenis kelamin harus dipilih";
        } else {
            $kelamin = validateInput($_POST["kelamin"]);
        }
    }
    ?>

    <h2>Syarif Syarifuddin PHP 01</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
        <span class="error">* <?php echo $namaErr; ?></span>
        <br><br>

        Alamat: <textarea name="alamat" rows="5" cols="40"><?php echo $alamat; ?></textarea>
        <span class="error">* <?php echo $alamatErr; ?></span>
        <br><br>

        Nomor Telepon: <input type="text" name="telepon" value="<?php echo $telepon; ?>">
        <span class="error">* <?php echo $teleponErr; ?></span>
        <br><br>

        Jenis Kelamin:
        <select name="kelamin">
            <option value="" <?php if (empty($kelamin)) echo "selected"; ?>>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" <?php if ($kelamin == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($kelamin == "Perempuan") echo "selected"; ?>>Perempuan</option>
        </select>
        <span class="error">* <?php echo $kelaminErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>