<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarif Syarifuddin PHP 03</title>
</head>

<body>

    <?php
    function tampilkanDeret($angka, $jumlah)
    {
        if ($jumlah <= 0) {
            echo "Jumlah harus lebih dari 0.";
            return;
        }

        for ($i = 1; $i <= $jumlah; $i++) {
            echo "$angka ";
        }
    }

    tampilkanDeret(790, 473, 281, 224, 483, 60, 698, 483, 790, 168);
    ?>

</body>

</html>