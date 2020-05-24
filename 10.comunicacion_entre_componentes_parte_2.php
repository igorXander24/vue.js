<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<!--
    1. Un componente padre que envuelve a un componente hijo
    2. Los prop, permiten hacer comunicación entre los componentes
-->
<div id="app" class="container">
    <padre></padre>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!--
    <script src="10.components/padre.js"></script>
    <script src="10.components/hijo.js"></script>
-->
<script>
    /**
     * En este ejemplo se trata de demostrar que la comunicación desde el padré al hijo es efectiva, en cambio para este
     * ejemplo la comunicación del hijo hacia el padre se realiza a traves de un evento; cuando se tiene una ramificación
     * de hijos mas extensa se hace mas tedioso este método.
     * */
    Vue.component('padre', {
        template    : `
        <div class="p-5 bg-dark text-white">
            <h2>Componente Padre: {{ numeroPadre }}</h2>
            <button class="btn btn-warning" @click="numeroPadre++">+</button>
            {{ nombrePadre }}
            <h2>{{ datePadre }}</h2>
            <hijo :numero="numeroPadre" @nombreHijo="nombrePadre = $event" @date="datePadre = $event"></hijo>

        </div>
    `,
        data() {
            return {
                numeroPadre: 0,
                nombrePadre: '',
                datePadre: 0
            };
        }
    });

    Vue.component('hijo', {
            template    : `
            <div class="py-5 bg-success">
                <h4>Componente Hijo: {{ numero }}</h4>
                <h4>Nombre: {{ nombre }}</h4>
                <h4>Computed: {{ time }}</h4>
                <button class="btn btn-danger" @click="numero++">+</button>
            </div>
        `,
        props       : ['numero'],
        data() {
            return {
                nombre  : 'Igor Alexander',
                date    : 0
            };
        },
        /**
         * Este evento se ejecuta cuando el DOM ya se ha dibujado
         * */
        mounted()     {
            //Emitir un evento?
            this.$emit('nombreHijo', this.nombre);
        },
        computed: {
            time() {
                setInterval(() => {
                    this.date = new Date();
                    //<- Se asemeja a los delegados.
                    //<- Realizando pruebas he notado que afecta al rendimiento del equipo.
                    //<- O quizas sea un percepción erronea
                    this.$emit('date', this.date.toLocaleString());
                }, 100);
                return this.date.toLocaleString();
            }
        }
    });

    new Vue({
        el  : '#app'
    });
</script>
</body>
</html>