<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>11. Introducción a Vuex</title>
    <!-- Ahora incluir en el head -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuex@3.1.3/dist/vuex.js"></script>
</head>
<body>
    <div id="app">
        <!-- Componente Padre -->
        <titulo></titulo>
    </div>

    <script>
        /**
         * Permite hacer datos globales, y tenerlos a dispocision, manipulaciones, etc
         * */

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
         * Tienda de datos o métodos globales.
         *
         * Me imagino que tambien tiene observadores y otras cositas que hacen mas sencilla la programación.
         * */
        const store = new Vuex.Store({
            /**
             * 1. Primero se debe de crear un estado, esos van a ser nuestros datos
             * */
            state: {
                //Disponibilidad global
                //El número es accesible tando desde el padre y el hijo
                numero  : 10
            },
            /**
             * 2. Métodos de ámbito global
             * */
            mutations: {
                //Métodos para manipular el número *Mutación para alterar el estado.
                /*
                aumentar() {
                    this.state.numero++;
                }
                */
                //<- State es un parámetro
                aumentar(state) {
                    //El paso es por referencia
                    //Se puede usar
                    state.numero++;
                }
            }

        });

        new Vue({
            el      : '#app',
            store   : store //<- Se tiene que referenciar a la tienda de datos
            /**
             * En el nuevo javascript se puede hacer lo siguiente
             * {
             *     el: '#app',
             *     store //<- Ya lo reconoce con el mismo nombre
             * }
             * */
        });
    </script>
</body>
</html>