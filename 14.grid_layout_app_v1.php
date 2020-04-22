<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App v1.0</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        /**
         * ICONS
         ***************************************************************************************************************
         */
        .icon {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 16px 16px;
            height: 100%;
            width: 32px;
        }

        .icon-x1-5 {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 22px 22px;
            height: 100%;
            width: 36px;
        }

        .icon-22 {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 22px 22px;
            height: 22px;
            width: 22px;
        }

        .whatsapp {
            background-image: url("social/whatsapp.svg");
        }

        .youtube {
            background-image: url("social/youtube.svg");
        }

        .hangout {
            background-image: url("social/hangout.svg");
        }

        .instagram {
            background-image: url("social/instagram.svg");
        }

        .messenger {
            background-image: url("social/messenger.svg");
        }

        .twitter {
            background-image: url("social/twitter.svg");
        }

        /**
         * FAST MENU
         ***************************************************************************************************************
         */
        .grayscale {
            -moz-filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
            -o-filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
            -webkit-filter: grayscale(100%);
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
        }

        .home {
            background-image: url("menu/real-estate.svg");
        }

        .ebsco {
            background-image: url("menu/chalk-board.svg");
        }

        .presentation {
            background-image: url("menu/presentation.svg");
        }

        .mail {
            background-image: url("menu/mail.svg");
        }

        .contact {
            background-image: url("menu/agenda.svg");
        }

        .books {
            background-image: url("menu/book.svg");
        }

        .ebooks {
            background-image: url("menu/ebook.svg");
        }

        .www {
            background-image: url("menu/domain.svg");
        }

        .work {
            background-image: url("menu/work.svg");
        }

        .menu {
            background-image: url("menu/menu.svg");
        }



        /**
         * ICONS
         ***************************************************************************************************************
         */
        .user {
            background-image: url("icons/user.svg");
        }

        .user-g {
            background-image: url("icons/user-g.svg");
        }

        .back {
            background-image: url("icons/back.svg");
        }

        .user-color {
            background-image: url("icons/boss.svg");
        }

        .key {
            background-image: url("icons/key.svg");
        }

        .turn-off {
            background-image: url("icons/turn-off.svg");
        }

        /**
         * EXTRA SMALL
         ***************************************************************************************************************
         */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        html,
        body {
            height: calc(100vh);
        }

        app {
            display: grid;
            grid-template-columns: 1fr;
            height: 100vh;
            grid-template-rows: 30px minmax(70px, 70px) 40px 1fr;
        }

        app *:not(select):not(option) {
            display: flex;
        }

        board,
        header {
            background-color: #F0EDED;

            align-items: center;
            font-size: calc(0.1vw + 0.5em);
        }

        board {
            padding: 0 10px;
            justify-content: space-between;
        }

        networks,
        menu-secondary,
        app > board > menu-secondary > linked {
            height: 100%;
            align-items: center;
        }

        app > board > menu-secondary > linked {
            padding: 0 8px;
        }

        menu-secondary > linked:hover,
        networks > *:hover,
        app > board > menu-linked:hover {
            background-color: #D4D4D4;
            cursor: pointer;
        }

        app > board > menu-secondary {
            display: none;
        }

        app > board > menu-linked {
            display: flex;
        }

        header {
            background-color: #68A039;
            font-size: calc(0.1vw + 0.7em);
            flex-direction: column;
            padding: 8px 30px;
            justify-content: space-around;
        }

        header > logo > img {
            width: 110px;
            height: 40px;

        }

        app > header > config {
            position: relative;
            align-items: center;
            color: white;
            height: 30px;
            min-height: 30px;
        }

        app > header > config > * {
            margin: 0 3px;
        }

        app > header > config > info,
        app > header > config > profile {
            display: none;
        }

        app > header > config > settings {
            border: 1px solid #588c30;
            border-radius: 3px;
        }

        app > menu {
            background-color: #32413E;
        }

        app > header > config > config-secondary-menu {
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            border-left: 1px solid rgba(0, 0, 0, 0.2);
            border-right: 1px solid rgba(0, 0, 0, 0.2);
            border-top: 0px;
            position: absolute;
            flex-direction: column;
            background-color: white;
            border-radius: 3px;
            color: #939393;
            padding: 2px 0;
            right: 0;
            top: 37px

        }

        app > header > config > config-secondary-menu > triangle {
            position: absolute;
            top: -7px;
            right: 9px;
            display: inline-block;
            border-right: 7px solid transparent;
            border-bottom: 7px solid white;
            border-left: 7px solid transparent;
            content: '';

        }

        app > header > config > config-secondary-menu > item {
            padding: 4px 8px;
            align-items: center;
        }

        app > header > config > config-secondary-menu > item:last-child {
            border-top: 1px solid rgba(0, 0, 0, 0.2);;
        }

        app > header > config > config-secondary-menu > item > * {
            margin: 0 5px;
        }

        app > header > config > config-secondary-menu > item:hover {
            background-color: coral;
            color: white;
        }
        /**
         * SMALL
         ***************************************************************************************************************
         */
        @media (min-width: 576px) {
            /**
             * code not implement
             */
            app > header > config > info,
            app > header > config > profile {
                display: flex;
            }

        }

        /**
         * MEDIUN
         ***************************************************************************************************************
         */
        @media (min-width: 768px) {
            /**
             * code not implement
             */

        }

        /**
         * LARGE
         ***************************************************************************************************************
         */
        @media (min-width: 992px) {
            /**
             * code not implement
             */

        }

        /**
         * EXTRA LARGE
         ***************************************************************************************************************
         */
        @media (min-width: 1200px) {
            /**
             * code not implement
             */
            app {
                grid-template-columns: 210px 1fr;
                grid-template-rows: 30px minmax(45px, 45px) 1fr;
            }

            board,
            header {
                grid-column: span 2;
            }

            header {
                flex-direction: row;
                justify-content: space-between;
            }

            app > board > menu-secondary {
                display: flex;
            }

            app > board > menu-linked {
                display: none;
            }

            /*
            app > header > config > config-secondary-menu {
                bottom: -46px;
            }
            */
        }
    </style>
</head>
<body>
    <app id="app">
        <board>
            <networks>
                <socials
                    v-for="social in socials"
                    v-bind:item="social"
                    v-bind:key="social.id">
                </socials>
            </networks>
            <menu-secondary>
                <linkeds
                    v-for="linked in linkeds"
                    v-bind:item="linked"
                    v-bind:key="linked.id">
                </linkeds>
            </menu-secondary>
            <menu-linked class="icon grayscale back"></menu-linked>
        </board>
        <header>
            <logo>
                <imagine></imagine>
            </logo>
            <control-config
                v-bind:user="user">
            </control-config>
        </header>
        <menu>

        </menu>
        <container>

        </container>
    </app>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        const _BLANK = '';

        Vue.component('socials', {
            props: ['item'],
            template: `
                <social :class="['icon', 'grayscale', item.tag]"></social>
            `
        });

        Vue.component('linkeds', {
            props: ['item'],
            template: `
                <linked>
                    <icon :class="['icon', 'grayscale', item.icon]"></icon>
                    <nome>{{ item.text }}</nome>
                </linked>
            `
        });

        Vue.component('imagine', {
            template: `
                <img src="logo/magma.svg" alt="">
            `
        });

        Vue.component('control-config', {
            props: ['user'],
            template: `
                <config>
                    <info>
                        Perfil,
                    </info>
                    <profile>
                        <select>
                            <option v-for="profile in user.profiles" :value="profile.i">{{ profile.text }}</option>

                        </select>
                    </profile>
                    <user>
                        {{ user.fullname }}
                    </user>
                    <settings class="icon user-g"></settings>
                    <config-secondary-menu>
                        <triangle></triangle>
                        <item>
                            <icon class="icon-22 user-color"></icon>
                            <option>Mis Datos</option>
                        </item>
                        <item>
                            <icon class="icon-22 key"></icon>
                            <option>Cambiar mi Contraseña</option>
                        </item>
                        <item>
                            <icon class="icon-22 turn-off"></icon>
                            <option>Cerrar Sessión</option>
                        </item>
                    </config-secondary-menu>
                </config>
            `
        });

        let _app = new Vue({
            el          : '#app',
            data        : {
                socials      : [ //<- Considerar colocar un id mas adelante
                    { tag : 'whatsapp'},
                    { tag : 'hangout'},
                    { tag : 'messenger'},
                    { tag : 'youtube'},
                    { tag : 'instagram'},
                    { tag : 'twitter'}
                ],
                linkeds      : [
                    { icon : 'home', text: 'INICIO' },
                    { icon : 'ebsco', text: 'EBSCO' },
                    { icon : 'presentation', text: 'AULA VIRTUAL' },
                    { icon : 'mail', text: 'CORREO' },
                    { icon : 'contact', text: 'CONTÁCTENOS' },
                    { icon : 'books', text: 'BIBLIOTECA' },
                    { icon : 'ebooks', text: 'BIBLIOTECA VIRTUAL' },
                    { icon : 'www', text: 'WEB UCT' },
                    { icon : 'work', text: 'BOLSA DE TRABAJO' }
                ],
                user: {
                    fullname : 'Igor Alexander Quispe Vásquez',
                    profiles: [
                        { i: '1', text: 'Administrador'},
                        { i: '2', text: 'Programador'}
                    ]
                }
            }
            /*,
            mounted()    {
                this.socials = this.social.map((e) => {
                    return _social(e.tag);
                }).join(_BLANK);

                this.linkeds = this.linked.map((e) => {
                    return _linked(e.icon, e.text);
                }).join(_BLANK);
            }
            */
        });
    </script>
</body>
</html>