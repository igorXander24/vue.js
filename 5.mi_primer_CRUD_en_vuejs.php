<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD con vue.js</title>
</head>
<body>
    <div id="app" class="container mt-5">
        <h3> {{ titulo }} </h3>

        <input type="text" class="form-control my-3" v-model="nuevaTarea" @keyup.enter="agregarTarea">
        <button class="btn btn-primary" @click="agregarTarea">Agregar</button>

        <div class="mt-5" v-for="(tarea, i) of tareas">
            <div :class="['alert', tarea.estado ? 'alert-success' : 'alert-danger']" role="alert">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                         {{ i }} - {{ tarea.nombre }} - {{ tarea.estado }}
                    </div>
                    <div>
                        <button class="btn btn-success btn-sm" @click="editarTarea(i)">OK</button>
                        <button class="btn btn-danger btn-sm" @click="eliminar(i)">X</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let _BLANK = '';

        const _app = new Vue({
            el          : '#app',
            data        : {
                titulo      : 'GYM con VUE',
                tareas      : [],
                nuevaTarea  : ''
            },
            methods     : {
                agregarTarea() {
                    this.tareas.push({
                        nombre  : this.nuevaTarea,
                        estado  : false
                    });
                    this.nuevaTarea = _BLANK;
                    //LOCALSTORAGE
                    localStorage.setItem('l_tareas', JSON.stringify(this.tareas));
                },
                editarTarea(i) {
                    this.tareas[i].estado = true;
                    //LOCALSTORAGE
                    localStorage.setItem('l_tareas', JSON.stringify(this.tareas));
                },
                eliminar(i) {
                    this.tareas.splice(i, 1);
                    //LOCALSTORAGE
                    localStorage.setItem('l_tareas', JSON.stringify(this.tareas));
                }
            },
            created: function() {
                let _l_tareas = JSON.parse(localStorage.getItem('l_tareas'));
                if(_l_tareas === null) {
                    this.tareas = [];
                } else {
                    this.tareas = _l_tareas;
                }
            }

        });
    </script>
</body>
</html>