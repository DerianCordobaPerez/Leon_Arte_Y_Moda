<x-layout :title="$title">
    <!-- Css -->
    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </x-slot>

    <!-- Navbar component -->
    <x-navbar />

    <main class="container p-2">
        {{ $slot }}
    </main>

    <!-- Footer component -->
    <x-footer />

    <!-- Scripts -->
    <x-slot:javascript>

    </x-slot>
</x-layout>
