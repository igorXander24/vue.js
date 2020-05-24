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
        <script src="9.components/padre.js"></script>
        <script src="9.components/hijo.js"></script>
    -->
    <script>
        //<- PADRE
        /**
         * El padre le va a enviar un valor al hijo, por medio de un attr *Atributo
         * de aqui parte la idea de componentes sin una raíz
         * */
        Vue.component('padre', {
            template    : `
                <div class="p-5 bg-dark text-white">
                    <h2>Componente Padre: {{ numeroPadre }}</h2>
                    <button class="btn btn-warning" @click="numeroPadre++">+</button>
                    <hijo :numero="numeroPadre"></hijo>
                </div>
            `,
            data() {
                return {
                    numeroPadre: 0
                };
            }
        });

        //<- HIJO
        Vue.component('hijo', {
            props       : ['numero'],
            template    : `
                <div class="py-5 bg-success">
                    <h4>Componente Hijo: {{ numero }}</h4>
                </div>
            `

        });

        new Vue({
            el  : '#app'
        });
    </script>
</body>
</html>