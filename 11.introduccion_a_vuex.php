<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>11. Introducción a Vuex</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuex@3.1.3/dist/vuex.js"></script>
</head>
<body>
    <div id="app">
        <titulo></titulo>
    </div>

    <script>
        Vue.component('titulo', {
            template: `
                <div>
                    <h1>numero: {{ $store.state.numero }}</h1>
                    <hijo></hijo>
                </div>
            `
        });

        Vue.component('hijo', {
            template: `
                <div>
                    <button @click="$store.commit('aumentar')">+</button>
                    <h1>numero: {{ $store.state.numero }}</h1>
                </div>
            `
        });

        /**
         * Objeto de configuración
         * Generalmente está en un archivo aparte.
         * Tienda de datos o métodos.
         * */
        const store = new Vuex.Store({
            state: {
                //El número es accesible tando desde el padre y el hijo
                numero  : 10
            },
            mutations: {
                //Métodos para manipular el número *Mutación para alterar el estado.
                /*
                aumentar() {
                    this.state.numero++;
                }
                */
                aumentar(state) {
                    state.numero++;
                }
            }

        });

        new Vue({
            el      : '#app',
            store   : store
        });
    </script>
</body>
</html>