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
    <div id="app" class="container">
        <h3> {{ mensaje }} </h3>
        <h3> invertido: {{ invertido }} </h3>
        <input type="text" class="form-control" v-model="mensaje">
        <hr>
        <button class="btn btn-primary" @click="contador++">+</button>
        <button class="btn btn-danger" @click="contador--">-</button>
        <h3>{{ contador }}</h3>

        <div class="progress">
            <div class="progress-bar" role="progressbar" :style="{width: contador + '%'}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" :class="color"> {{ contador }} % </div>
        </div>

        <time>
            {{ time }}
        </time>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
        let _BLANK = '';

        const _app = new Vue({
            el      : '#app',
            /**
             * En data no se puede colocar datos con alguna lógica, no está permitido.
             * */
            data    : {
                mensaje     : 'hola soy Igor',
                contador    : 0,
                date        : null
            },
            /**
             * Las propiedades computadas siempre deben tener un return.
             * Se utilizan para realizar cálculos simples, si se requiere algo mas complejo, buscar otra vía.
             * */
            computed    : {
                invertido() {
                    return this.mensaje.split('').reverse().join(_BLANK);
                },
                color() {
                    return {
                        'bg-success'    : this.contador <= 10,
                        'bg-warning'    : this.contador > 10 && this.contador < 20,
                        'bg-danger'     : this.contador >= 20
                    }
                },
                time() {
                    setInterval(() => {
                        this.date = new Date();

                    }, 1000);
                    return this.date;
                }
            }
        });
    </script>
</body>
</html>