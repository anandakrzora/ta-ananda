<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bawa Motor</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>
        @include('public.layout.partials.navbar')
    <div>
        @include('public.layout.partials.hero')
    </div>
    <div>
        @include('public.layout.partials.about')
    </div>
    <div>
        @include('public.layout.partials.product')
    </div>
    <div>
        @include('public.layout.partials.testimoni')
    </div>
    <div>
        @include('public.layout.partials.contact')
    </div>
    <footer>
        @include('public.layout.partials.footer')
    </footer>
</body>

</html>
