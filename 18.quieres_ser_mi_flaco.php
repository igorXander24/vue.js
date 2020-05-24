<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quisieras ser mi flaco?</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        html, body {
            height: 100%;
        }

        body,
        app,
        app * {
            display: flex;
        }

        body {
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        app {
            flex-direction: column;
        }

        app > * {
            margin: 5px;
        }

        app > question {
            font-size: 2em;
        }

        app > anwser {
            justify-content: center;
        }

        button {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            margin: 4px;

            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            width: 50px;
        }

        button:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        button.active {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        button.active:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <app id="app">
        <question>
            ¿Quisieras ser mi flaco?
        </question>
        <anwser>
            <button @click="clic" @mouseover="change(0)" :class="active[0]">{{ respuesta[0] }}</button>
            <button @click="clic" @mouseover="change(1)" :class="active[1]">{{ respuesta[1] }}</button>
        </anwser>
    </app>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let _app = new Vue({
            el: '#app',
            data: {
                active      : ['active', ''],
                acepta      : '',
                respuesta   : ['Si', 'No']
            },
            methods: {
                change(i) {
                    switch (i) {
                        case 0:
                            this.respuesta = ['Si', 'No'];
                            this.active    = ['active', ''];
                            break;
                        case 1:
                            this.respuesta = ['No', 'Si'];
                            this.active    = ['', 'active'];
                            break;
                    }
                },
                clic() {
                    alert('Aceptaste :)');
                }
            }

        });
    </script>
</body>
</html>