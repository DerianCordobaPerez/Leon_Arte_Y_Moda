<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Leon Arte y Moda' }}</title>

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('css')
</head>

<body>
    <div id="app">
        <!-- Navbar component -->
        <x-navbar />

        <main class="container p-2">
            {{ $slot }}
        </main>

        <!-- Footer component -->
        <x-footer />
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
