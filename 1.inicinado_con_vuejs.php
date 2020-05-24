<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciando con vue</title>
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Signika', sans-serif;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        v-card {
            background-color: lightgreen;
            padding: 0 1rem;
            display: flex;
            align-items: center;

            border-radius: 10px;
            height: 14rem;
            width: 25rem;
            border: 1px solid darkgreen;
            margin: 1em 0;
        }

        photo {
            display: flex;
            align-items: center;
        }

        photo > img {
            width: 9rem;
            height: 12rem;
        }

        personal-data {
            color: darkolivegreen;
            padding: 1rem;
            display: flex;
            flex-direction: column;

            height: 100%;
        }

        personal-data > full-name {
            font-size: 1.7em;
            font-weight: bold;
        }

        personal-data > job-title {
            font-size: 1.2em;
        }

        personal-data > e-code {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-self: flex-end;
            flex-grow: 1;
        }
    </style>
</head

<body>
    <list-employyes id="card">
        <v-card v-for="employee of employees">
            <photo>
                <img :src="employee.path">
            </photo>
            <personal-data>
                <full-name>
                    {{ employee.fullname }}
                </full-name>
                <job-title>
                    {{ employee.jobtitle }}
                </job-title>
                <e-code>
                    <cO>
                        {{ employee.ecode }}
                        <status v-if="employee.status">-E</status>
                    </cO>
                </e-code>
            </personal-data>
        </v-card>
    </list-employyes>



    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        /*
        const _app = new Vue({
            el      : '#app',      //<- Atributo propio de Vue
            data    :   {
                 titulo: 'Hola mundo con vue.js'
            }
        });
        */

        const _app = new Vue({
            el          : '#card',
            data        : {
                employees   : [
                    {
                        fullname    : 'Margarita Tone',
                        path        : 'emma.jpg',
                        jobtitle    : 'Ingeniero de Software',
                        ecode       : 123499981256,
                        status      : true
                    },
                    {
                        fullname    : 'Leonel Lazarte',
                        path        : 'anton.jpg',
                        jobtitle    : 'Arquitecto',
                        ecode       : 466779991,
                        status      : false
                    },
                    {
                        fullname    : 'Ezequiel Hanampa',
                        path        : 'anton.jpg',
                        jobtitle    : 'Arquitecto',
                        ecode       : 466779991,
                        status      : false
                    }
                ]


            }
        });
    </script>
</body>
</html>