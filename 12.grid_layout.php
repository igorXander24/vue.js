<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grid Layout</title>
    <link href="https://fonts.googleapis.com/css?family=Comic+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <style>
        /**
         * COLORS
         */
        .duolingo {
            background-color: #78C817;
        }

        .spotify {
            background-color: black;
        }

        .firefox,
        .microsoft {
            background-color: #011440;
        }

        .java {
            background-color: #F0F0F0;
        }

        .vs {
            background-color: #3E3E3E;
        }

        .telegram {
            background-color: #2DA1D3;
        }

        .vue {
            background-color: #f2f2f2;
        }

        .lenovo {
            background-color: rgb(226, 35, 25);;
        }

        .maps {
            background-color: #F8F8F8;
        }

        .visa {
            background-color: #0D4595;
        }

        .evernote {
            background-color: #59A043;
        }

        .tiktok {
            background-color: #000000;
        }

        .messenger {
            background-color: #0583FC;
        }

        /**
         * ALL
         */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Comic Neue', cursive;
        }

        landing {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        article {
            font-size: calc(0.5vw + 0.4em);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .direction-column {
            flex-direction: column;
        }

        img {
            width: 100%;
            height: 100%;
        }

        /**
         * EXTRA SMALL
         ***************************************************************************************************************
         */
        .rectangle {
            grid-column: span 2;
            height: calc(40vw);
        }

        .vrectangle {
            height: calc(80vw);
            grid-row: span 2;
        }

        .cube {
            height: calc(40vw);
        }

        .cube_x2 {
            grid-row: span 2;
            grid-column: span 2;
            height: calc(80vw);
        }

        .img-duolingo,
        .img-spotify {
            width: 40%;
            height: 40%;
        }

        .img-stackoverflow,
        .img-google,
        .img-firefox,
        .img-excel,
        .img-vs,
        .img-telegram,
        .img-vue,
        .img-evernote {
            width: 60%;
            height: 60%;
        }

        .img-microsoft,
        .img-java,
        .img-lenovo,
        .img-maps {
            width: 80%;
            height: 80%;
        }

        .img-visa {
            width: 95%;
            height: 75%;
        }

        .img-tiktok,
        .img-messenger {
            width: 80%;
            height: 80%;
        }

        h2.title-duolingo,
        h2.title-spotify {
            font-family: 'Baloo Thambi 2', cursive;
            color: white;
            padding: 8px 0;
            font-size: calc(1vw + 1.5em);
        }

        /**
         * SMALL
         ***************************************************************************************************************
         */
        @media (min-width: 576px) {
            /**
             * code not implement
             */
        }

        /**
         * MEDIUN
         ***************************************************************************************************************
         */
        @media (min-width: 768px) {
            landing {
                grid-template-columns: repeat(5, minmax(0, 1fr));
            }

            .rectangle,
            .cube {
                height: calc(20vw);
            }

            .vrectangle,
            .cube_x2 {
                height: calc(40vw);
            }
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
        }
    </style>
</head>
<body>
    <landing>
        <article class="rectangle duolingo direction-column">
            <img src="https://d35aaqx5ub95lt.cloudfront.net/images/owls/spread.svg" class="img-duolingo" alt="">
            <h2 class="title-duolingo">duolingo</h2>
        </article>
        <article class="cube spotify direction-column">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" class="img-spotify" alt="">
            <h2 class="title-spotify">Spotify</h2>
        </article>
        <article class="cube">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Google_Chrome_icon_%28September_2014%29.svg" class="img-google" alt="">
        </article>
        <article class="vrectangle microsoft">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" class="img-microsoft" alt="">
        </article>
        <article class="vrectangle java">
            <img src="https://cdn.worldvectorlogo.com/logos/java-4.svg" class="img-java" alt="">
        </article>
        <article class="cube">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7f/Microsoft_Office_Excel_%282018%E2%80%93present%29.svg" class="img-excel" alt="">
        </article>
        <article class="cube firefox">
            <img src="https://design.firefox.com/product-identity/firefox-nightly/firefox-logo-nightly.svg" class="img-firefox" alt="">
        </article>
        <article class="cube vs">
            <img src="https://cdn.worldvectorlogo.com/logos/visual-studio-code.svg" class="img-vs" alt="">
        </article>
        <article class="cube telegram">
            <img src="https://rocketbots.io/wp-content/uploads/2019/01/Telegram.svg" class="img-telegram" alt="">
        </article>
        <article class="cube vue">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg" class="img-vue" alt="">
        </article>
        <article class="cube visa">
            <img src="https://jutlandpark.com.au/wp-content/plugins/give/assets/dist/images/visa.svg" class="img-visa" alt="">
        </article>
        <article class="cube evernote">
            <img src="https://www.iconninja.com/files/174/571/766/application-iphone-app-evernote-technology-smartphone-mobile-icon.svg" class="img-evernote" alt="">
        </article>
        <article class="cube tiktok">
            <img src="https://cdn.worldvectorlogo.com/logos/tiktok-app-icon-8.svg" class="img-tiktok" alt="">
        </article>
        <article class="cube_x2 maps">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Google_Maps_icon.svg" class="img-maps" alt="">
        </article>
        <article class="rectangle">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Stack_Overflow_logo.svg" class="img-stackoverflow" alt="">
        </article>
        <article class="cube messenger">
            <img src="https://cdn.worldvectorlogo.com/logos/facebook-messenger-white.svg" class="img-messenger" alt="">
        </article>
        <article class="cube lenovo">
            <img src="https://cdn.worldvectorlogo.com/logos/lenovo-2.svg" class="img-lenovo" alt="">
        </article>
        <article class="vrectangle microsoft">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" class="img-microsoft" alt="">
        </article>
        <article class="cube duolingo direction-column">
            <img src="https://d35aaqx5ub95lt.cloudfront.net/images/owls/spread.svg" class="img-duolingo" alt="">
            <h2 class="title-duolingo">duolingo</h2>
        </article>
        <article class="cube telegram">
            <img src="https://rocketbots.io/wp-content/uploads/2019/01/Telegram.svg" class="img-telegram" alt="">
        </article>
        <article class="rectangle vs">
            <img src="https://cdn.worldvectorlogo.com/logos/visual-studio-code.svg" class="img-vs" alt="">
        </article>
    </landing>
</body>
</html>