<x-layout :title="$title">
    <!-- Css -->
    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @isset($css)
            {{ $css }}
        @endisset
    </x-slot>

    <!-- Navbar component -->
    <x-common.navbar />

    <main>
        {{ $slot }}
    </main>

    <!-- Footer component -->
    {{-- <x-common.footer /> --}}

    <!-- Scripts -->
    <x-slot:js>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @isset($js)
            {{ $js }}
        @endisset
    </x-slot>
</x-layout>
