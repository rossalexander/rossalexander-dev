<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Work Sans', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="antialiased">

@include('navigation')
@include('intro')
@include('about')
@include('experience')
@include('contact')
<footer class="bg-slate-900 w-full mx-auto p-8 text-center text-slate-500">
    <p>test</p>
</footer>
@livewireScripts
</body>
</html>
