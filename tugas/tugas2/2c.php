<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
</head>
<style>
    .table {
        color: black;
        width: 20px;
        height: 20px;
        text-align: center;
        background-color: pink;
        border: 1px solid black;
    }
</style>

<body>
    <table cellpadding="10" cellspacing="0">
        <?php for ($a = 10; $a >= 1; $a--) : ?>
            <tr>
                <?php for ($b = 1; $b <= $a; $b++) : ?>
                    <td class="table"> <?= "$b"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>