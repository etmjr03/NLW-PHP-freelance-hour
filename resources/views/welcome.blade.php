<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <header>header</header>

    <main>
        <x-layouts.app>
            <livewire:search />
        </x-layouts.app>
        @auth
            <h1>Você está logado</h1>
        @endauth
    </main>

    <footer>footer</footer>
</body>
</html>
