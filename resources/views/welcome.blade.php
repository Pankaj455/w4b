<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&family=Urbanist:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
        @vite(['resources/sass/app.scss'])
        <script defer src="https://unpkg.com/@phosphor-icons/web@2.0.3"></script>
    </head>
    <body>
        <h1>Hello world</h1>
        <p class="subtitle-1">Subtitle 1</p>
        <x-download name="Download" url="#" type="primary" />
    </body>
</html>
