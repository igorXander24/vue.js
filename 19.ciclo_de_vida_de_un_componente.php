<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo de Vida de un Componente</title>
    <style>

    </style>
</head>
<body>
    <div id="app">
        <button @click="evento" reff="c_001">{{ mensaje }}</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
        let _app = new Vue({
            el: '#app',
            data: {
                mensaje: 'Hola Mundo!'
            },
            methods: {
                evento() {
                    alert('Click');
                }
            },
            beforeCreate() {
                console.log('BEFORE CREATE');
                console.log(this)
            },
            created() {
                console.log('CREATE');
                console.log(this)
            },
            beforeMount() {
                console.log('BEFORE MOUNT');
                console.log(this)
            },
            mounted() {
                console.log('MOUNTED');
                console.log(this)
            },
            beforeUpdate() {
                console.log('BEFORE UPDATE');
                console.log(this)
            },
            updated() {
                console.log('UPDATED');
                console.log(this)
            },
            beforeDestroy() {
                console.log('BEFORE DESTROY');
                console.log(this)
            },
            destroyed() {
                console.log('DESTROYED');
                console.log(this)
            }
        });

    </script>
</body>
</html>