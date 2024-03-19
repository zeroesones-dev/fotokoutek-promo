<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            overflow-x: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }

        .split {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 64px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100dvh;
        }
    </style>
</head>

<body style="margin:0;padding:0;height:200dvh;">
    <div class="split">
        <a href="/iframe.php">
            Verze iframe
        </a>
        <a href="/php.php">
            Verze php
        </a>
    </div>
</body>

</html>