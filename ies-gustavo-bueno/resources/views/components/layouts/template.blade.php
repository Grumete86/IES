<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IES Gustavo Bueno {{ isset($title)? " | ".$title: " "}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
            <x-nav></x-nav>
            <x-subnav></x-subnav>
            <div class="container-xxl my-md-4 bd-layout">
                <x-sidebar></x-sidebar>
                <main class="bd-main order-1">
                    {{$slot}}
                </main>
            </div>
            <x-footer></x-footer>
    </body>
</html>
