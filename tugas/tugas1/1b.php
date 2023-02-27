<?php
$npm = 3;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b</title>
</head>

<body>

    <!-- Jawaban yang Kurang tepat -->
    <?php print "Aku adalah angka <b>$npm</b>" ?>
    <br>
    <?php print "Jika aku dikali 5, maka aku sekarang menjadi " . '<b>' . $npm * 5 . '</b>' ?>
    <br>
    <?php print "Jika aku dibagi 2, maka aku sekarang menjadi " . '<b>' . $npm / 2 . '</b>' ?>
    <br>
    <?php print "Jika aku ditambah 75, maka aku sekarang menjadi " . '<b>' . $npm + 75 . '</b>' ?>
    <br>
    <?php print "Jika aku dikurangi 20, maka aku sekarang menjadi " . '<b>' . $npm - 20 . '</b>' ?>
    <br>

    <!-- Jawaban yang benar -->
    <p>
        <?php echo "Aku adalah angka <b>$npm</b> <br>" ?>

        <?php echo "Jika aku dikali 5, maka aku sekarang menjadi <b>" . ($npm *=  5) . "</b> <br>" ?>
        <?php echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>" . ($npm /= 2) . "</b> <br>" ?>
        <?php echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>" . ($npm += 75) . "</b> <br>" ?>
        <?php echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>" . ($npm -= 20) . "</b> <br>" ?>

    </p>

</body>

</html>