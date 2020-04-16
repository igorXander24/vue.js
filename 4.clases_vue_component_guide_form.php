<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Componente Formualario Guia</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans Condensed', sans-serif;
        }

        html, body {
            height: 100%;
        }

        body,
        guide-form,
        tabby,
        container,
        breadcumb,
        i-body,
        group_control,
        modal-container,
        modal-container > modal,
        modal-container > modal > m-head {
            display: flex;
        }

        guide-form {
            flex-grow: 1;
        }

        tabby {
            flex-direction: column;
            border-right: 1px solid #CCCCCC;

        }

        tabby > tab {
            max-width: 260px;
            /*height: 50px;*/
            /*
            min-width: 120px;
            */
            color: white;
            background-color: dimgray;
            padding: 8px 10px;
            font-size: calc(1vw + 0.5em);

            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Opera and Firefox */
        }

        tab.active {
            background-color: yellowgreen;

        }

        container {
            flex-grow: 1;
            flex-direction: column;0
        }

        breadcumb {
            height: 80px;
            align-items: center;
            padding: 0 15px;
            color: black;
            font-size: calc(1vw + 1.5em);
        }

        i-body {
            padding: 15px;
            flex-direction: column;
        }

        group_control {
            align-items: center;
            padding: 10px 0;
        }

        group_control > label {

            font-size: calc(1vw + 1.2em);
            color: #939393;
        }

        group_control > input {
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            border: none;
            border-bottom: 1px solid #CCCCCC;
            font-size: calc(1vw + 1.2em);
            color: #CCCCCC;
        }

        /**Tamaños*/
        .elarge {
            width: 500px;
        }

        .large {
            width: 350px;
        }

        .mediun {
            width: 200px;
        }

        .short {
            width: 100px;
        }

        .eshort {

        }

        @media only screen and (max-width: 720px) {
            guide-form {
                flex-direction: column;
            }

            tabby {
                flex-direction: row;
                border: none;
                border-bottom: 1px solid #CCCCCC;
            }

            .elarge {
                width: 500px;
            }

            .large {
                width: 250px;
            }

            .mediun {
                width: 100px;
            }

            .short {
                width: 50px;
            }

            .eshort {

            }

        }

        button {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 50px;
            height: 50px;
            font-size: 30px;
            border-radius: 50%;
            font-weight: bold;
            border: 1px solid cadetblue;
            color: white;
            background-color: cadetblue;
        }

        modal-container {
            background-color: rgba(0, 0, 0, 0.35);
            position: absolute;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        modal-container > modal {
            background-color: white;
            width: 600px;
            height: 400px;
            border: 1px solid #939393;
            border-radius: 5px;
            flex-direction: column;

        }

        modal-container > modal > m-head {
            border-bottom: 1px solid #CCCCCC;
            font-size: calc(1vw + 1.2em);
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
        }

        modal-container > modal > m-head > m-title {
            color: cadetblue;
        }

        modal-container > modal > m-head > close {
            color: #939393;
            font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <guide-form id="guide">
        <tabby>
            <tab @click="set_active(step)" :class="{'active' : step.active}" :key="step.reff" v-for="step of steps">{{ step.order }} - {{ step.name }}</tab>
        </tabby>
        <container v-html="set_html">

        </container>

        <button @click="open_modal()">
            +
        </button>
    </guide-form>
    <!-- :class="{class_a: true, class_b: false}"  -->


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let _BLANK = '';
        let _tabby_container = (title, html) => {
            let _html = `
                <breadcumb>
                    ${title}
                </breadcumb>
                <i-body>
                    ${html}
                </i-body>
            `;

            return  _html;
        };

        let _modal = () => {
            //<- En futuras implementaciónes se debe de utilizar el formato actual.
            let _html = `
                <modal-container>
                    <modal>
                        <m-head>
                            <m-title>
                                Lorem ipsum dolor sit amet
                            </m-title>
                            <close>
                                x
                            </close>
                        </m-head>
                        <m-body></m-body>
                        <m-footer></m-footer>
                    </modal>
                </modal-container>`;
            return _html;
        };

        var _app = new Vue({
            el          : '#guide',
            data        : {
                steps   : [
                    {
                        order   : 1,
                        name    : 'Información Personal',
                        active  : true,
                        html    : `
                            <group_control>
                                <label class="mediun" for="">Nombres</label>
                                <input class="large" type="text">
                            </group_control>
                            <group_control>
                                <label class="mediun" for="">Apellidos</label>
                                <input class="large" type="text">
                            </group_control>
                            <group_control>
                                <label class="mediun" for="">Sexo</label>
                                <label>M</label><input class="short" type="radio" name="sexo">
                                <label>F</label><input class="short" type="radio" name="sexo">
                            </group_control>
                        `
                    },
                    {
                        order   : 2,
                        name    : 'Datos de Ubicación',
                        active  : false,
                        html    : 'X202'
                    },
                    {
                        order   : 3,
                        name    : 'Información Financiera',
                        active  : false,
                        html    : 'X203'
                    }
                ],
                html    : _BLANK,
                modal   : false
            },
            methods     : {
                set_active (step) {
                    this.steps.map(o => {
                        o.active = false
                    });
                    step.active = true;
                    this.html = step.html;
                },
                get_active () {
                    for(step of this.steps) {
                        if(step.active) {
                            return step;
                        }
                    }
                },
                open_modal () {
                    /*
                    let _m = document.createElement(_modal());
                    console.log(_m);
                    */
                    /*
                    document.querySelector('body').appendChild(_m);
                    console.log(document.querySelector('body').children);
                    */
                    document.querySelector('body').insertAdjacentHTML('beforeend', _modal());
                }
            },
            computed    : {
                set_html () {
                    let _e = this.get_active();
                    let _t = _e.name || _BLANK;
                    let _h = _e.html || _BLANK;
                    this.html = _tabby_container(_t, _h); //<- html is atributte of item
                    return this.html;
                }
            }
        });
    </script>
</body>
</html>