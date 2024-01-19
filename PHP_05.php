<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarif Syarifuddin PHP 05</title>
    <style>
        textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>

<body>

    <?php
    function generateMatrix($n)
    {
        $matrix = array();
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($i + $j < $n - 1) {
                    $matrix[$i][$j] = "*";
                } else {
                    $matrix[$i][$j] = $n - $i;
                }
            }
        }
        return $matrix;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["n"]) && is_numeric($_POST["n"])) {
            $n = (int)$_POST["n"];
            if ($n >= 1 && $n <= 10) {
                $matrix = generateMatrix($n);
                echo "<textarea>";
                for ($i = 0; $i < $n; $i++) {
                    for ($j = 0; $j < $n; $j++) {
                        echo $matrix[$i][$j];
                    }
                    echo "\n";
                }
                echo "</textarea>";
            } else {
                echo "Masukkan angka antara 1 dan 10.";
            }
        } else {
            echo "Masukkan angka yang valid.";
        }
    }
    ?>

    <h2>Syarif Syarifuddin PHP 05</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Masukkan nilai N (1-10): <input type="text" name="n">
        <br><br>
        <input type="submit" name="submit" value="Generate Matrix">
    </form>

</body>

</html>