<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChangeColor</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            /**FONTS*/
            font-family: "Droid Sans Mono", "monospace", monospace, "Droid Sans Fallback";
            font-weight: normal;
            /*font-size: 14px;*/
            line-height: 19px;
            letter-spacing: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div#app,
        div#app * {
            display: flex;
        }

        div#app,
        div.container {
            width: 100%;
            height: 100%;
        }

        div.container {
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        color {
            width: 32px;
            height: 32px;
        }

        .red {
            background-color: red;
        }

        .orange {
            background-color: orange;
        }

        .green {
            background-color: green;
        }

        .blue {
            background-color: blue;
        }

        .gray {
            background-color: gray;
        }

        .pink {
            background-color: pink;
        }

        .yellow {
            background-color: yellow;
        }

        menu {
            flex-direction: column;
            background-color: white;
            border: 1px solid #CCCCCC;
            position: absolute;
            padding: 5px;
            width: 160px;
            height: 176px;
        }

        menu > describe {

        }

        menu > list-color {
            flex-wrap: wrap;
        }

        menu > list-color > color {
            margin: 2px;
            border-radius: 3px;
        }


    </style>
    <!-- VUE and VUEX -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuex@3.1.3/dist/vuex.js"></script>
</head>
<body>
    <!-- Por el momento para la app usaré div, luego debo investigar como utilizar etiquetas propias -->
    <div id="app">
        <!-- Si esto es template, desaparece -->
        <board>

        </board>
    </div>
    <script>
        const DEFAULT_COLOR = 'white';
        const BLANK         = '';
        const ZERO          = 0;
        const PX            = 'px';

        Vue.component('board', {
            template: `
                <div id="container" class="container" @contextmenu="openMenu" :class="backgroundClassBoard" @click="verifyContext">
                    <h1>Clic derecho sobre cualquier parte para iniciar el menú contextual.</h1>
                    <context>

                    </context>
                </div>
            `,
            methods: {
                openMenu(e) {
                    e.preventDefault();

                    let _width      = e.originalTarget.clientWidth || 0;
                    let _height     = e.originalTarget.clientHeight || 0;

                    let _x          = e.clientX;
                    let _y          = e.clientY;

                    store.state.leftMenuLocation          = (((_width - _x) <= 160) ? (_x - 160) : _x) + PX;
                    store.state.topMenuLocation           = (((_height - _y) <= 176) ? (_y - 176) : _y) + PX;
                    store.state.visibilityContextMenu     = true;

                },
                verifyContext(e) {
                    let _id = e.target.id || BLANK;
                    if(_id === 'container') {
                        if(store.state.visibilityContextMenu)
                            store.state.visibilityContextMenu = false;
                    }
                }
            },
            /*,
            computed: {
                /**
                 * Alternativa 1
                 * La siguiente propiedad computada mapea un dato de la tienda *store
                 *
                backgroundColor() {
                    return store.state.backgroundClassBoard;
                }
            }
            */
            /**
             * Alternativa 28
             * Mapeo de estados
             * */
            computed: {
                //<- ... hace que los elementos de un objeto se integren a otro objeto
                ...Vuex.mapState(['backgroundClassBoard'])
            }
        });

        Vue.component('context', {
            template: `
                <menu v-if="visibilityContextMenu" v-bind:style="{ top: topMenuLocation, left: leftMenuLocation }">
                    <describe>Seleccione un color</describe>
                    <list-color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'red' })" class="red"></color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'orange' })" class="orange"></color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'green' })" class="green"></color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'blue' })" class="blue"></color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'gray' })" class="gray"></color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'pink' })" class="pink"></color>
                        <color @click="$store.commit('changeBackgroundColor', { color: 'yellow' })" class="yellow"></color>
                    </list-color>
                    <comentary>
                        <p>
                            *Este es un ejemplo del uso de Vuex.
                        </p>
                    </comentary>
                </menu>
            `,
            computed: {
                ...Vuex.mapState(['visibilityContextMenu', 'topMenuLocation', 'leftMenuLocation'])
            }
            /*,
            updated() {
                //this.$el.active();

                //console.log(this.$el);
            },
            methods: {
                closeMenu() {
                    store.state.visibilityContextMenu     = false;
                },
                activeFocus() {
                    //alert('focus');
                    this.$el.focus();
                }
            }
            */
        });

        const store = new Vuex.Store({
            state: {
                visibilityContextMenu   : false,
                topMenuLocation         : ZERO + PX,
                leftMenuLocation        : ZERO + PX,
                backgroundClassBoard    : DEFAULT_COLOR
            },
            mutations: {
                /**
                 * o: object vuex state
                 * p: parameters
                 * */
                changeBackgroundColor(o, p) {
                    let _color = p.color || DEFAULT_COLOR;

                    o.backgroundClassBoard                = _color;
                    store.state.visibilityContextMenu     = false;
                }
            }
        });

        let _app = new Vue({
            el: '#app',
            store
        });
    </script>
</body>
</html>