<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <message></message>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        Vue.component('message', {
            render (createElement) {
                return createElement('', [
                    createElement('h1', 'Hello world'),
                    createElement('div', 'this.msg 2')
                ])
            }
        });

        new Vue({
            el: '#app'
        })
    </script>
</body>
</html>