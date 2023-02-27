<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
</head>
<style>
    .table {
        border: 1px solid black;
    }

    .color {
        background-color: black;
        width: 50px;
        height: 50px;
        border: 3px solid black;
    }

    .color2 {
        background-color: white;
        width: 50px;
        height: 50px;
    }
</style>

<body>

    <table class="table" cellpadding="10" cellspacing="0">
        <?php for ($a = 1; $a <= 5; $a++) : ?>
            <tr>
                <?php
                for ($b = 1; $b <= 5; $b++) :
                ?>

                    <?php
                    if (($a + $b) % 2 == 0) :
                    ?>
                        <td class="color">
                        <?php else : ?>
                        <td class="color2">
                        <?php endif; ?>
                        </td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>

</body>

</html>