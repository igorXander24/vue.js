<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ciclo de Vida de Vue</title>
</head>
<body>
    <div class="container" id="app">
        <h3>
            {{ saludo }}
        </h3>

        <button @click="saludo = 'Saludo cambiado'" class="btn btn-primary">Cambiar Saludo</button>

        <button @click="destruir()" class="btn btn-danger">Destruir</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
        const _app = new Vue({
            el          : '#app',
            data        : {
                saludo  : 'soy el ciclo de vida de vue'
            },
            beforeCreate() {
                console.log('beforeCreate');
            },
            created() {
                /**
                 * Al crear los métodos observadores y eventos, pero aún no se accede al DOM.
                 * aún no se puede acceder 'el'
                 * */
                console.log('created');
            },
            beforeMount() {
                /**
                 * Se ejecuta antes de insertar el DOM
                 * */
                console.log('beforeMount')
            },
            mounted() {
                /**
                 * Se ejecuta al insertar el DOM
                 * */
                console.log('mounted');
            },
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
            /**
             * Update, se ejecuta cuando hay un cambio en nuestro HTML
             * */
            beforeUpdate() {
                console.log('beforeUpdate');
            },
            updated() {
                console.log('updated');
            },
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
            beforeDestroy() {
                console.log('beforeDestroy');
            },
            destroyed() {
                console.log('destroyed');
            },
            methods: {
                destruir() {
                    this.$destroy();
                }
            }
        });
    </script>
</body>
</html>