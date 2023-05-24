<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=figtree:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/fonts/fontawesome/css/all.css') }}" rel="stylesheet">
    </link>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark h-full bg-neutral-900">
    <div class="">
        <div id="app">
            @yield('content')
        </div>
    </div>
</body>

</html>