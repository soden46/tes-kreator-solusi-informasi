<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarif Syarifuddin PHP 04</title>
</head>

<body>

    <?php
    function bilanganGanjilDiAntara($angka1, $angka2)
    {
        if (!is_numeric($angka1) || !is_numeric($angka2)) {
            echo "Parameter harus berupa angka.";
            return;
        }

        $angka1 = (int)$angka1;
        $angka2 = (int)$angka2;

        if ($angka1 >= $angka2) {
            echo "Angka awal harus lebih kecil dari angka akhir.";
            return;
        }

        $bilanganGanjil = array();

        for ($i = $angka1; $i <= $angka2; $i++) {
            if ($i % 2 != 0) {
                $bilanganGanjil[] = $i;
            }
        }

        echo "Bilangan Ganjil di Antara $angka1 dan $angka2: ";
        print_r($bilanganGanjil);
    }
    ?>

    <h2>Syarif Syarifuddin PHP 04</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Angka Awal: <input type="text" name="angka1">
        <br><br>
        Angka Akhir: <input type="text" name="angka2">
        <br><br>
        <input type="submit" name="submit" value="Tampilkan Bilangan Ganjil">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        bilanganGanjilDiAntara($_POST["angka1"], $_POST["angka2"]);
    }
    ?>

</body>

</html>