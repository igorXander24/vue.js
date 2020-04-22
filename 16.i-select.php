<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-Select</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        html, body {
            height: 100%;
        }

        body,
        app,
        app * {
            display: flex;
        }

        body {
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        app > i-select * {
            font-size: calc(0.5vw + 0.5em);
        }

        app > i-select,
        app > i-select > list {
            flex-direction: column;
        }

        app > i-select {
            position: relative;
        }

        app > i-select > display {
            padding-left: 5px;
            justify-content: space-between;
            border: 1px solid gray;
            align-items: center;
            width: 200px;
            height: 40px;

        }

        app > i-select > display > item {
            align-items: center;
        }

        .icon {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 16px 16px;
            height: 40px;
            width: 40px
        }

        .icon_24 {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 24px 24px;
            height: 40px;
            width: 40px
        }

        indicator.uncollapse {
            background-image: url("icons/up-arrow.svg");
        }

        .peru {
            background-image: url("icons/flags/svg/074-peru.svg");
        }

        .denmark {
            background-image: url("icons/flags/svg/072-denmark.svg");
        }

        .india {
            background-image: url("icons/flags/svg/217-india.svg");
        }

        .thailand {
            background-image: url("icons/flags/svg/184-thailand.svg");
        }

        .colombia {
            background-image: url("icons/flags/svg/062-colombia.svg");
        }

        .mexico {
            background-image: url("icons/flags/svg/239-mexico.svg");
        }

        .norway {
            background-image: url("icons/flags/svg/058-norway.svg");
        }

        .belarus {
            background-image: url("icons/flags/svg/110-belarus.svg");
        }

        .england {
            background-image: url("icons/flags/svg/152-england.svg");
        }

        .japan {
            background-image: url("icons/flags/svg/033-japan.svg");
        }

        .philippines {
            background-image: url("icons/flags/svg/076-philippines.svg");
        }

        app > i-select > list {
            border: 1px solid gray;
            position: absolute;
            top: 40px;
            width: 200px;
            max-height: 200px;
            height: 200px;
            overflow-y: auto;


        }

        app > i-select > list > item {
            height: 40px;
            min-height: 40px;
            padding: 5px;
            align-items: center;
        }

        app > i-select > list > item:hover {
            background-color: #0D4595;
            color: white;
        }



    </style>
</head>
<body>
    <app id="app">
        <i-component-select></i-component-select>
    </app>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        Vue.component('i-component-select', {
            template    : `
                <i-select>
                    <display @click="display = !display">
                        <item>
                            <icon :class="['icon_24', selected.icon]"></icon>
                            <label>{{ selected.text }}</label>
                        </item>
                        <indicator class="icon uncollapse"></indicator>
                    </display>
                    <list v-if="display">
                        <item v-for="item in items" :value="item.value" @click="select(item)">
                            <icon :class="['icon_24', item.icon]"></icon>
                            <label>{{ item.text }}</label>
                        </item>
                    </list>
                </i-select>
            `,
            data () {
                return {
                    display         : false,
                    selected        : null,
                    items           : [
                        { value: '1', text: 'Perú', icon: 'peru' },
                        { value: '2', text: 'India', icon: 'india' },
                        { value: '3', text: 'Tailandia', icon: 'thailand' },
                        { value: '4', text: 'Colombia', icon: 'colombia' },
                        { value: '5', text: 'Mexico', icon: 'mexico' },
                        { value: '6', text: 'Noruega', icon: 'norway' },
                        { value: '7', text: 'Bielorusia', icon: 'belarus' },
                        { value: '8', text: 'Inglaterra', icon: 'england' },
                        { value: '9', text: 'Japon', icon: 'japan' },
                        { value: '10', text: 'Filipinas', icon: 'philippines' },
                        { value: '11', text: 'Dinamarca', icon: 'denmark' }
                    ]
                }
            },
            mounted() {
                this.selected = { value: '_none_', text: 'Seleccione...', icon: 'none'}
            },
            methods: {
                select(item) {
                    this.selected = item;
                    this.display = false;
                }

            }
        });

        const _app = new Vue({
            el : '#app'
        });
    </script>
</body>
</html>