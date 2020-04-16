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

        .back {
            background-image: url("icons/back.svg");
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
            grid-template-rows: 30px 80px 40px 1fr;
        }

        app * {
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
        links,
        app > board > links > linked {
            height: 100%;
            align-items: center;
        }

        app > board > links > linked {
            padding: 0 8px;
        }

        links > linked:hover,
        networks > *:hover,
        app > board > menu-linked:hover {
            background-color: #D4D4D4;
            cursor: pointer;
        }

        app > board > links {
            display: none;
        }

        app > board > menu-linked {
            display: flex;
        }

        header {
            background-color: #4CB24F;
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
            align-items: center;
            color: white;
            height: 100%;
        }

        app > header > config > * {
            margin: 0 3px;
        }

        app > header > config > text,
        app > header > config > profile {
            display: none;
        }

        app > header > config > settings {
            border: 1px solid gray;
            border-radius: 3px;
        }

        app > menu {
            background-color: #2F8E7C;
        }
        /**
         * SMALL
         ***************************************************************************************************************
         */
        @media (min-width: 576px) {
            /**
             * code not implement
             */
            app > header > config > text,
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
                grid-template-rows: 30px 45px 1fr;
            }

            board,
            header {
                grid-column: span 2;
            }

            header {
                flex-direction: row;
                justify-content: space-between;
            }

            app > board > links {
                display: flex;
            }

            app > board > menu-linked {
                display: none;
            }
        }
    </style>
</head>
<body>
    <app id="app">
        <board>
            <networks v-html="getsocials"></networks>
            <links v-html="getlinkeds"></links>
            <menu-linked class="icon grayscale back"></menu-linked>
        </board>
        <header>
            <logo>
                <img src="logo/magma.svg" alt="">
            </logo>
            <config>
                <text>
                    Perfil, 
                </text>
                <profile>
                    <select name="" id="">
                        <option selected value="xvn1009e">Administrador</option>
                        <option value="xvn1009r">Desarrollador</option>
                    </select>
                </profile>
                <user>
                    IGOR A. QUISPE VÁSQUEZ
                </user>
                <settings class="icon user grayscale">

                </settings>
            </config>
        </header>
        <menu>
            1
        </menu>
        <container>
            2
        </container>
    </app>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        const _BLANK = '';

        let _social = (tag) => {
            let _html = `
                <${tag} class="icon grayscale ${tag}"></${tag}>
            `;
            return _html;
        };

        let _linked = (icon, text) => {
            let _html = `
                <linked>
                    <icon class="icon grayscale ${icon}"></icon>
                    <nome>${text}</nome>
                </linked>
            `;
            return _html;
        };

        let _app = new Vue({
            el          : '#app',
            data        : {
                social      : [
                    { tag : 'whatsapp'},
                    { tag : 'hangout'},
                    { tag : 'messenger'},
                    { tag : 'youtube'},
                    { tag : 'instagram'},
                    { tag : 'twitter'}
                ],
                linked      : [
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
                socials     : _BLANK,
                linkeds     : _BLANK
            },
            computed    : {
                getsocials () {
                    this.socials = this.social.map((e) => {
                        return _social(e.tag);
                    }).join(_BLANK);
                    return this.socials;
                },
                getlinkeds () {
                    this.linkeds = this.linked.map((e) => {
                        return _linked(e.icon, e.text);
                    }).join(_BLANK);
                    return this.linkeds;
                }
            }
        });
    </script>
</body>
</html>