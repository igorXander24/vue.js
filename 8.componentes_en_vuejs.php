<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div id="app">
        <saludo></saludo>
        <contador></contador>

        <contador></contador>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>

        /**
         * Todo componente tiene un templade.
         * Todo componente debe estar dentro de un ID.
         * Cuando se usa un templade, se tiene que colocar dentro de una envoltura.
         * Los componentes no interfieren si se instancian mas de una vez.
         * Los template literales se deben de colocar dentro de una envoltura.
         * */
        Vue.component('saludo', {
            template    : `
                <div>
                    <h3>{{ saludo }}</h3>
                    <h2>ggdfhkdfgjd</h2>
                </div>
            `,

            //El data en forma de función
            data () {
                return {
                    saludo  : 'Hola Igor Alexander'
                }
            }
        });

        Vue.component('contador', {
            template    : `
                <div>
                    <h3>{{ numero }}</h3>
                    <button @click="numero++" class="btn btn-success">+</button>
                </div>
            `,
            data () {
                return {
                    numero : 0
                }
            }
        });

        new Vue({
            el      : '#app'
        });


    </script>
</body>
</html>