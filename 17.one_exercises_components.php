<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controles de Formulario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
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
        }
        
        app > collections {
            flex-direction: column;
            width: calc(50vw);
            border: 1px solid cadetblue;
            padding: 10px 0;
        }

        app > collections > label,
        app > collections > info > label {
            margin: 10px;
            background-color: #41ABE1;
            color: white;
            padding: 5px 10px;
            height: 30px;
            align-items: center;
            border-radius: 3px;
            font-family: "Courier 10 Pitch";
            align-self: flex-start;
        }

        app > collections > control > input[type=range] {
            width: 100%;
            -webkit-appearance: none;
            padding: 5px;
        }

        app > collections > control > input[type=range]:focus {
            outline: none;
        }

        app > collections > control > input[type=range]::-webkit-slider-runnable-track,
        app > collections > control > input[type=range]::-moz-range-track {
            height: 12.8px;
            cursor: pointer;

            box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
            background: #41ABE1;
            border-radius: 25px;
            border: 0px solid #000101;
        }

        app > collections > control > input[type=range]::-webkit-slider-thumb,
        app > collections > control > input[type=range]::-moz-range-thumb {
            /*box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;*/
            /*border: 0px solid #000000;*/
            border-radius: 50%;
            height: 40px;
            width: 40px;
            border: none;
            background: #41ABE1;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -3.6px;
        }

        app > collections > container {
            flex-wrap: wrap;
            margin-top: 18px;
            padding: 5px;
            height: calc(30vh);
            overflow-y: auto;

        }

        app > collections > container > item {
            height: 105px;
            width: 105px;
            /*border: 1px solid cadetblue;*/
            margin: 5px;
            background-color: #A8C7D5;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: calc(1vw + 1em);
        }

        app > collections > info {
            align-self: flex-end;
        }


    </style>
</head>
<body>
    <app id="app">
        <slider></slider>
    </app>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        Vue.component('slider', {
            template: `
                <collections>
                    <label>max-value: {{ val }}</label>
                    <control>
                        <input type="range" min="0" max="100" step="0.01" v-model="val">
                    </control>
                    <container>
                        <items v-for="item in items" :item="item" :val="val"></items>
                    </container>
                    <info>
                        <label class="count">total-items: {{ getCount }}</label>
                        <label class="count">total-items-visible: {{ getCountVisible }}</label>
                    </info>
                </collections>
            `,
            data() {
                return {
                    val: 20,
                    items: []
                };
            },
            methods: {
                getRandon(min=0, max=100) {
                    let _p = (max + 1) - min; //<- Posibilidades
                    let _randon = (min + (Math.random() * _p));
                    return (Math.floor(_randon) == max) ? max : _randon;
                }
            },
            computed: {
                getCount(){
                    return this.items.length;
                },
                getCountVisible() {
                    let _n = this.items.filter((e) => {
                        return this.val >= e.price;
                    }).length;
                    return _n;
                }
            },
            mounted() {
                let _r = Math.floor(this.getRandon(0, 1000));
                for(let _i = 0; _i <= _r; _i++){
                    let _pr = this.getRandon();
                    this.items.push({ id: _i, price: _pr });
                }
                console.log(this.items.map((e) => { return e.price }));
            }
        });

        Vue.component('items', {
            props: ['item', 'val'],
            template: `
                <item v-if="(item.price <= val)">{{ item.price.toFixed(2) }}</item>
            `,
        });

        let _app = new Vue({
            el      : '#app'
        });
    </script>
</body>
</html>