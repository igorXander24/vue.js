<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Notas</title>
    <link href="https://fonts.googleapis.com/css?family=Bellota+Text&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bellota Text', cursive;
        }

        html, body {
            height: 100%;
        }

        body,
        i-title,
        i-information,
        indicator,
        i-student-list {
            display: flex;
        }

        body {
            background-color: #f9f9f9;
            flex-direction: column;
        }

        i-title {
            justify-content: center;
            padding: 10px 0;
            font-size: calc(1vw + 0.8em);
        }

        i-information {
            justify-content: flex-end;
        }

        indicator {
            align-items: center;
        }

        indicator > * {
            margin: 0 5px;
        }

        indicator > description {
            font-size: calc(0.5vw + 0.5em);
        }

        color {
            min-height: 25px;
            min-width: 25px;
            background-color: #939393;
        }


        .red {
            background-color: darkred;
        }

        .orange {
            background-color: orange;
        }

        .green {
            background-color: forestgreen;
        }

        i-student-list {
            justify-content: center;
            padding-top: 20px;
            overflow-x: auto;
        }

        /**TABLE*/
        i-table {
            display: table;
            width: 80%;
            min-width: 740px;
        }
        i-row {
            display: table-row;
            border: 1px solid black;
        }

        i-head {
            display: table-header-group;
            background-color: black;
            color: white;
        }
        i-body { display: table-row-group; }
        i-footer { display: table-footer-group; }

        i-td, i-th {
            display: table-cell;
            border-bottom: 1px solid #cccccc;
            padding: 5px;
            font-size: calc(0.5vw + 0.5em);

        }



        i-td:not(:last-child) {

        }

        i-th {
            text-align: center;
        }

        tag {
            color: white;
            padding: 3px 5px;
            border-radius: 4px;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        input[type=number],
        input[type=text]{
            height: 32px;
            text-align: right;
            padding: 0 5px;
        }

    </style>
</head>
<body>
    <i-register id="register">
        <i-title>
            Registro de Notas
        </i-title>
        <i-information>
            <indicator v-for="legend of legends">
                <color :class="legend.color">
                </color>
                <description>
                    {{ legend.name }}
                </description>
            </indicator>
        </i-information>
        <i-student-list>
            <i-table>
                <i-head>
                    <i-row>
                        <i-th>#</i-th>
                        <i-th>Alumno</i-th>
                        <i-th>Unidad I</i-th>
                        <i-th>Unidad II</i-th>
                        <i-th>Unidad III</i-th>
                        <i-th>Promedio</i-th>
                        <i-th>Resultado</i-th>
                    </i-row>
                </i-head>
                <i-body>
                    <i-row v-for="student of students" >
                        <i-td>{{ student.i }}</i-td>
                        <i-td>{{ student.name }}</i-td>
                        <i-td class="right">
                            <input @change="generar_promedio" type="number" v-model.number="student.n1">
                        </i-td>
                        <i-td class="right">
                            <input @change="generar_promedio" type="number" v-model.number="student.n2">
                        </i-td>
                        <i-td class="right">
                            <input @change="generar_promedio" type="number" v-model.number="student.n3">
                        </i-td>
                        <i-td class="right">
                            <input type="text" v-model="student.p" readonly>
                        </i-td>
                        <i-td class="center">
                            <tag :class="student.c">
                                {{ student.resultado }}
                            </tag>
                        </i-td>
                    </i-row>
                    <i-row>
                        <i-th></i-th>
                        <i-th></i-th>
                        <i-th></i-th>
                        <i-th></i-th>
                        <i-th></i-th>

                        <i-th class="right">{{ promedio_general }}</i-th>
                        <i-th></i-th>
                    </i-row>
                </i-body>
            </i-table>



        </i-student-list>
    </i-register>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let _BLANK = '';
        const _app = new Vue({
            el          : '#register',
            data        : {
                legends : [
                    {color: 'red', name: 'REPROBADO'},
                    {color: 'orange', name: 'RECUPERACIÓN'},
                    {color: 'green', name: 'APROBADO'}
                ],
                students : [
                    {i: 1, name: 'Igor Alexander Quispe Vásquez', n1: 5, n2: 9, n3: 20, p: 0, resultado: _BLANK, c: _BLANK},
                    {i: 2, name: 'Fernando Leonel Lazarte Tone', n1: 0, n2: 0, n3: 0, p: 0, resultado: _BLANK, c: _BLANK},
                    {i: 3, name: 'Selmira Tuanama Tuanama', n1: 0, n2: 0, n3: 0, p: 0, resultado: _BLANK, c: _BLANK},
                ],
                promedio : 0.00
            },
            mounted() {
                this.generar_promedio();

            },
            methods     : {
                generar_promedio () {
                    //No modifica el objeto, paso por valores
                    /*
                    let _students = this.students;
                    for (let _student of _students) {
                        let _n1 = _student.n1;
                        let _n2 = _student.n2;
                        let _n3 = _student.n3;
                        _student.resultado = (_n1 + _n2 + _n3) / 3;
                    }
                    */

                    //Recorrido de referencia, modifica el valor
                    this.students.map((o) => {
                        let _n1 = o.n1;
                        let _n2 = o.n2;
                        let _n3 = o.n3;
                        let _p = parseInt((_n1 + _n2 + _n3) / 3);

                        let _r = _BLANK;
                        let _c = _BLANK;

                        if(_p <= 10) {
                            _r = 'REPROBADO';
                            _c = 'red';
                        } else {
                            if(_p === 11) {
                                _r = 'RECUPERACIÓN';
                                _c = 'orange';
                            } else {
                                _r = 'APROBADO';
                                _c = 'green';
                            }
                        }
                        o.p =  _p;
                        o.resultado = _r;
                        o.c = _c;

                    });
                }
            },
            computed    : {
                promedio_general() {
                    let _promedio_general = 0.00;
                    let _t = this.students.length;

                    for (let _student of this.students) {
                        _promedio_general = _promedio_general + _student.p;
                    }

                    _promedio_general = (_promedio_general / _t).toFixed(2);
                    this.promedio = _promedio_general;

                    return this.promedio;

                }
            }
        });
    </script>
</body>
</html>