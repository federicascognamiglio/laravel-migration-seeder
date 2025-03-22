<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Trains</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        @include('Partials.header')
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>