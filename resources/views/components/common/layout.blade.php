<x-layout :title="$title">
    <!-- Css -->
    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </x-slot>

    <!-- Navbar component -->
    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <!-- Footer component -->
    {{-- <x-footer /> --}}

    <!-- Scripts -->
    <x-slot:javascript>
        <script src="{{ asset('js/app.js')}}"></script>
    </x-slot>
</x-layout>
