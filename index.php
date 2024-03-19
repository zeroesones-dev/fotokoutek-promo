<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            overflow-x: hidden;
        }

        .menu {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 80px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: calc(infinity);
            font-family: Arial, Helvetica, sans-serif;
            background-color: lightgray;
        }

        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 320px;
            position: relative;
            z-index: calc(infinity);
            font-family: Arial, Helvetica, sans-serif;
            background-color: grey;
        }
    </style>
</head>

<body style="margin:0;padding:0;height:200dvh;">
    <div class="menu">Partner menu/header</div>
    <iframe src="https://www.fotokoutek-vecerek.cz/promo" width="100%" height="100%" style="min-height: 100dvh;"
        frameborder="0"></iframe>
    <footer>
        Partner footer content
    </footer>
</body>

</html>