<x-layout :title="$title">
    <!-- Css -->
    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @isset($css)
            {{ $css }}
        @endisset
    </x-slot>

    <!-- Navbar component -->
    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <!-- Footer component -->
    {{-- <x-footer /> --}}

    <!-- Scripts -->
    <x-slot:js>
        <script src="{{ asset('js/app.js') }}"></script>
        @isset($js)
            {{ $js }}
        @endisset
    </x-slot>
</x-layout>
