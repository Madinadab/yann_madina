<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            background-color: #c8e0eb;
            animation-name: couleurfond;
            animation-duration: 20s;
            animation-delay: 0s;
            animation-iteration-count: infinite;
        }

        #cercle {
            width: 200px;
            height: 200px;
            border-radius: 100px;
            background-color: white;
        }

        @keyframes positioncercle {
            0% {
                top: 150px;
            }

            50% {
                top: 300px;
            }

            100% {
                top: 150px;
            }
        }

        #cercle p {
            font-family: 'Courier New', monospace;
            font-weight: 100;
            color: #c8e0eb;
            font-size: 3em;
            text-align: center;
            margin: auto;
            line-height: 200px;
            animation-name: couleurtxt;
            animation-duration: 20s;
            animation-delay: 0s;
            animation-iteration-count: infinite;

        }

        #barrereseaux {
            position: relative;
            ;
            display: flex;
            flex-direction: column;
            flex-direction: wrap;
            width: auto;
            float: right;
            right: 15px;
            ;
            height: 100%;
            align-content: space-around;
            position: fixed;
            bottom: 20px;
            top: 15px;
        }

        #a1 {
            margin: auto;
            background-color: white;
            padding: 1em;
            width: 80px;
            height: 80px;
            text-align: center;
            margin: auto;
            line-height: 80px;
            text-decoration: none;
            border-radius: 100px;
            color: black;
            font-family: 'Courier New', monospace;
            font-weight: 100;
            animation-name: animres;
            animation-duration: 3s;
            animation-delay: 0s;
            animation-iteration-count: infinite;
        }

        #a2 {
            margin: auto;
            background-color: white;
            padding: 1em;
            width: 80px;
            height: 80px;
            text-align: center;
            margin: auto;
            line-height: 80px;
            text-decoration: none;
            border-radius: 100px;
            color: black;
            font-family: 'Courier New', monospace;
            font-weight: 100;
            animation-name: animres;
            animation-duration: 3s;
            animation-delay: 0.8s;
            animation-iteration-count: infinite;
        }

        #a3 {
            margin: auto;
            background-color: white;
            padding: 1em;
            width: 80px;
            height: 80px;
            text-align: center;
            margin: auto;
            line-height: 80px;
            text-decoration: none;
            border-radius: 100px;
            color: black;
            font-family: 'Courier New', monospace;
            font-weight: 100;
            animation-name: animres;
            animation-duration: 3s;
            animation-delay: 1.7s;
            animation-iteration-count: infinite;
        }

        #a4 {
            margin: auto;
            background-color: white;
            padding: 1em;
            width: 80px;
            height: 80px;
            text-align: center;
            margin: auto;
            line-height: 80px;
            text-decoration: none;
            border-radius: 100px;
            color: black;

            font-family: 'Courier New', monospace;
            font-weight: 100;
            animation-name: animres;
            animation-duration: 3s;
            animation-delay: 2.5s;
            animation-iteration-count: infinite;
        }


        a {
            animation-name: couleurtxt;
            animation-duration: 20s;
            animation-delay: 0s;
            animation-iteration-count: infinite;
            transition: 0.5s;
        }

        a:hover {
            opacity: 0.7;
        }

        #Bienvenue {
            width: auto;
            height: auto;
            color: white;
            font-family: 'Arial Narrow Bold', sans-serif;
            font-weight: 900;
            font-style: italic;
            font-size: 2em;
            line-break: 15px;
            line-height: 200x;
            margin: auto;
        }

        #move {
            position: absolute;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            width: auto;
            height: auto;
            top: auto;
            left: 50%;
            transform: translate(-50%);
            animation-name: positioncercle1;
            animation-duration: 20s;
            animation-delay: 0s;
            animation-iteration-count: infinite;
            text-align: center;
        }


        @keyframes positioncercle1 {
            0% {
                top: 2vh;
            }

            50% {
                top: 12vh;
            }

            100% {
                top: 2vh;
            }
        }

        @keyframes couleurfond {
            0% {
                background-color: #c8e0eb;
            }

            25% {
                background-color: #c8cfeb;
            }

            50% {
                background-color: #ebc8da;
            }

            75% {
                background-color: #c8ebe2;
            }

            100% {
                background-color: #c8e0eb;
            }
        }

        @keyframes couleurtxt {
            0% {
                color: #a0c7da;
            }

            25% {
                color: #a2acd4;
            }

            50% {
                color: #cc9bb4;
            }

            75% {
                color: #9bd1c4;
            }

            100% {
                color: #98b9c9;
            }
        }

        @keyframes animres {
            0% {
                width: 80px;
                height: 80px;
                ;
            }

            50% {
                width: 90px;
                height: 90px;
            }

            100% {
                width: 80px;
                height: 80px;
            }
        }

        @media (max-width:800px) {
            @keyframes animres {
                0% {
                    width: 40px;
                    height: 40px;
                    ;
                }

                50% {
                    width: 50px;
                    height: 50px;
                }

                100% {
                    width: 40px;
                    height: 40px;
                }
            }

            #Bienvenue {
                font-size: 1em;
            }

            #barrereseaux a {
                font-size: 0.7em;
                padding: 1em;
                line-height: 45px;
            }
        }

        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }


        a {
            color: inherit;
            text-decoration: inherit
        }





        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }



        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }



        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }


        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }




        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }



        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>


<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @if(isEmpty())
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endif
            @endauth
        </div>
        @endif

    </div>
    <div id='move'>
        <div id='cercle'>
            <p>HELLO</p>
        </div>
        <div id='Bienvenue'>
            <h1>Bienvenue sur le site de Jane Doe</h1>
            <h3><a href="#.html">ENTRER</a></h3>
        </div>
    </div>
    <section id='barrereseaux'>
        <a id='a1' href="#.html">TWITTER</a>
        <a id='a2' href="#.php">INSTA</a>
        <a id='a3' href="#.html">BEHANCE</a>
        <a id='a4' href="#.php">CONTACT</a>
    </section>

</body>

</html>