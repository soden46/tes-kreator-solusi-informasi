<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarif Syarifuddin PHP 06</title>
</head>

<body>

    <?php
    $arr = [2, 5, 3];
    $result = array_map(
        function ($n) {
            return pow($n, 2) + 3 * 2;
        },
        $arr
    );
    ?>

    <h2>Syarif Syarifuddin PHP 06</h2>
    <pre><?php print_r($result); ?></pre>

</body>

</html>