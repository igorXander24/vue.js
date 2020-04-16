<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hexagon Login</title>
    <style>
        hexagon {
            height: 4em;
            margin: 3.4641em 0;
            position: relative;
            width: 6.9282em;
            background-color: #939393;
        }

        hexagon:before {
            border-right:3.4641em solid transparent;
            border-bottom:2em solid #ccc;
            border-left:3.4641em solid transparent;
            content: '';
            height:0;
            left: 0;
            position: absolute;
            right; 0;
            top: -2em;
            width: 0;
            background-color: #939393;
        }

        hexagon:after {
            border-top:2em solid #ccc;
            border-right:3.4641em solid transparent;
            border-left:3.4641em solid transparent;
            bottom:-2em;
            content: '';
            height:0;
            left: 0;
            position: absolute;
            right; 0;
            width:0;
            background-color: #939393;
        }
    </style>
</head>
<body>
    <hexagon>

    </hexagon>
</body>
</html>