<?php
$alat = ['Motherboard', 'Processor', 'Hard Disk', 'PC Cooler', 'VGA Card', 'SSD']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>

<body>
    <h2>Macam-macam Perangkat keras komputer</h2>
    <ol>
        <?php foreach ($alat as $perangkat) { ?>
            <li><?= $perangkat;  ?></li>
        <?php } ?>
    </ol>

    <?php
    array_push($alat, 'Card Reader', 'Modem');
    sort($alat); ?>
    <h2>Macam-macam Perangkat keras komputer baru</h2>
    <ol>
        <?php foreach ($alat as $perangkat) { ?>
            <li><?= $perangkat;  ?></li>
        <?php } ?>
    </ol>
</body>

</html>