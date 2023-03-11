<?php
$binatang = ['🐈', '🐰', '🐷', '🐮', '🐲'];
$makan = ['🍜', '🍕', '🍞', '🍣'];

array_pop($binatang);
array_pop($binatang);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebun Binatang</title>
</head>

<body>
    <!-- <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?= $binatang[$i] ?></li>
        <?php } ?>
    </ul> -->
    <h2>Datar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i] ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar Makanan</h2>
    <ul>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <li><?= $makan[$i] ?></li>
        <?php } ?>
    </ul>
    <hr>

    <!--  -->

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach ($binatang as $lian_jleg) { ?>
            <li><?= $lian_jleg;  ?></li>
        <?php } ?>
    </ol>
    <h2>Daftar Makanan Lian</h2>
    <ol>
        <?php foreach ($makan as $lian) { ?>
            <li>💩</li>
        <?php } ?>
    </ol>
</body>

</html>