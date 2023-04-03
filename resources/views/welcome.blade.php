<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Shadowlands</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
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

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
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

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
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

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
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

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
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

    <div class="border">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif






            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <img class="h-16 w-auto bg-gray-100 dark:bg-gray-900" src="data:image/png;base64,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" alt="">
                    <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20" />
                    </svg>
                </div>

                <div class="mt-16">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                        <a href="/home" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                            <div>

                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="skull" src="data:image/jpeg;base64,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" alt="">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Crypt of the Shadowlands</h2>
                                <h3>Chapter I: Witchcraft of the dark dungeon</h3>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Le jeu RPG Maker est un jeu de rôle en ligne dans lequel les joueurs peuvent créer et gérer leurs propres personnages, ainsi que former des groupes avec d'autres joueurs.

                                </p>

                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>

                        </a>

                        <img src="https://assets.dicebreaker.com/syma-rpg-artwork-2.png/BROK/resize/1200x1200%3E/format/jpg/quality/70/syma-rpg-artwork-2.png" alt="">




                    </div>


</body>

</html>