<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RossAlexander.dev</title>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/app.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{--    Work Sans--}}
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;600;700&display=swap"
          rel="stylesheet">
    {{--    Roboto Mono--}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        [x-cloak] {
            display: none !important;
        }

        .flip {
            transform: rotateX(-180deg);
        }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="antialiased bg-slate-900 relative">

@include('navigation')
@include('intro')
@include('about')f
@include('experience')
@include('connect')

<footer class="bg-slate-900 w-full mx-auto p-8 text-center text-slate-500">
    <div class="max-w-4xl b mx-auto flex flex-col items-center space-y-4 justify-center">
        <p class="text-sm font-mono">Developed by Ross Alexander</p>

        <div class="flex items-center justify-center space-x-4">
            <a title="github.com/rossalexader" href="https://github.com/rossalexander" target="_blank"
               class="block w-6 h-6 bg-contain bg-center bg-no-repeat"
               style="background-image:url('/media/github.svg')"></a>

            <a title="linkedin.com/rossalexader" href="https://www.linkedin.com/in/ross-alexander-19360155/"
               target="_blank"
               class="block w-6 h-6 bg-contain bg-center bg-no-repeat"
               style="background-image:url('/media/linkedin.svg')"></a>
        </div>
    </div>
</footer>

<div class="fixed h-full w-full">
    <a onclick="myScroll()" id="scroll"
       class="hidden text-center fixed z-50 bottom-4 sm:bottom-20 text-slate-300 left-0 right-0 w-16 h-16 mx-auto cursor-pointer bg-center bg-contain bg-no-repeat transition-transform"
       style="background-image:url('/media/arrow.svg')">
        <span id="ping" class="flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-10"></span>
        </span>
    </a>
</div>


<script>
    let x = 0;
    const sections = ['', 'about', 'experience', 'connect'];

    function myScroll() {
        $('#ping').remove();
        x++;
        if (x === sections.length) {
            x = 0;
        }
        if (x === 0) {
            $('#scroll').toggleClass('flip')
        }
        if (x === 3) {
            $('#scroll').toggleClass('flip')
        }
        location.href = "#" + sections[x]
    }
</script>
</body>
</html>
