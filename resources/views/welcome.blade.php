<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="bg-white w-full h-screen flex items-center">
    <div class="max-w-5xl mx-auto p-8">
        <p class="mb-4 text-4xl text-stone-500 font-thin">Hi, my name is</p>
        <p class="text-7xl text-stone-700 font-bold">Ross Alexander</p>
        <p class="leading-normal font-thin my-5 text-4xl text-stone-500">I'm a developer specializing in <span
                class="text-violet-500 font-bold">PHP</span>,
            <span class="text-violet-500 font-bold">Laravel</span> and
            <span class="text-violet-500 font-bold">Vue</span>, <br>with a passion for backend and
            data-driven development.</p>
    </div>
</div>
<div class="bg-slate-900 w-full h-screen flex items-center">
    <div class="max-w-4xl mx-auto p-8">
        <h2 class="text-slate-300 text-4xl font-bold">About Me</h2>
        <div class="flex flex-row">
            <p class="text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa deleniti
                dignissimos eos error, hic,
                minus molestiae nam nobis officia omnis praesentium quaerat ratione recusandae repellendus repudiandae
                ullam
                ut vel?</p>
            <div class="w-96 h-96 bg-gray-100"></div>
        </div>
    </div>
</body>
</html>
