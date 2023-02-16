<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
        }

        .kotak {
            width: 100px;
            height: 100px;
            background-color: red;
            position: relative;
            border: 1px solid black;
        }

        .kotak2 {
            position: absolute;
            font-family: sans-serif 'times new roman';
            color: white;
            font-weight: 500;
            font-size: 30px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kotak">
            <div class="kotak2">1</div>
        </div>
    </div>

    <div class="container">
        <div class="kotak">
            <div class="kotak2">2</div>
        </div>
        <div class="kotak">
            <div class="kotak2">2</div>
        </div>
    </div>
    <div class="container">
        <div class="kotak">
            <div class="kotak2">3</div>
        </div>
        <div class="kotak">
            <div class="kotak2">3</div>
        </div>
        <div class="kotak">
            <div class="kotak2">3</div>
        </div>
    </div>

</body>

</html>