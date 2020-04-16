<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrada de Texto, Evento en Vue.js</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        html, body {
            height: 100%;
        }

        body {
            background-color: #f9f9f9;
        }

        body,
        soul,
        region_input_tables,
        region_input_tables > inputy,
        region_input_tables > butty,
        table-container,
        table-container > i-table {
            display: flex;
        }

        body {
            justify-content: center;
            align-items: center;
        }

        soul {
            flex-direction: column;
            width: 40%;
            min-width: 420px;
            height: 40%;
            min-height: 232px;
            background-color: white;
            box-shadow: 0px 3px 10px -2px rgba(0,0,0,0.2);
        }

        region_input_tables {
            height: 15%;
            min-height: 50px;

        }

        region_input_tables > inputy {
            background-color: #f9f9f9;
            flex-grow: 0.7;
            padding: 0 8px;
        }

        region_input_tables > butty {
            flex-grow: 0.3;
        }

        input#tables {
            width: 100%;
            text-align: right;
            font-size: calc(1vw + 0.5em);
            border: none;
            background-color: rgba(0,0,0,0);
            color: #939393;
            caret-color: #939393;
        }

        button#generar {
            width: 100%;
            font-size: calc(1vw + 0.5em);
            border: none;
            background-color: #7ed321;
            color: white;

        }

        soul table-container {
            margin: 10px;
            flex: 1;
            flex-flow: wrap;
            overflow-y: auto;
            align-content: flex-start;
        }

        table-container > i-table {
            border-radius: 3px;
            justify-content: center;
            align-items: center;
            width: 10%;
            height: 23%;
            margin: 3px;
            font-size: calc(1vw + 1em);
            min-width: 75px;
            min-height: 75px;
            border: 1px solid #cc9517;
            background-color: #FCE300;
            color: white;
        }

    </style>
</head>
<body>
    <soul id="replicate">
        <region_input_tables>
            <inputy>
                <input id="tables" type="text" v-model="number" @keyup.enter="generate" ref="numbers">
            </inputy>
            <butty>
                <button @click="generate" id="generar">Generar</button>
            </butty>
        </region_input_tables>
        <table-container>
            <i-table v-for="table of tables">
                <number>{{ table }}</number>
            </i-table>
        </table-container>

    </soul>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let _BLANK = '';

        const _app = new Vue({
            el      : '#replicate',
            data    : {
                tables : [],
                number : _BLANK
            },
            /*
            created () {
                var _e = this;

                console.log(_e);

                /*
                let _in = this.$refs[''];

                console.log(_in);
                _in.focus();
                _in.setSelectionRange(1,1);

            },
            */
            mounted () {
                let _in = this.$refs['numbers'];
                _in.focus();
            },
            methods  : {
                generate () {
                    this.tables = [];

                    let _t = this.number;
                    for(let _i = 1; _i <= _t; _i++)
                        this.tables.push(_i);
                }
            }

        });


    </script>
</body>
</html>