<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top p-0">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logoLAM.png') }}" class="logo-navbar" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"> Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" href="#">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" href="#">Contactanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<x-slot:js>

    </x-slot>
