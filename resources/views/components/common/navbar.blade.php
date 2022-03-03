<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top p-0">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/Logo.png')}}" class="logo-navbar" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link px-0">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorias <i class="bi bi-chevron-down fs-6"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                <li class="nav-item">
                    <a class="nav-link px-0" href="{{route('gallery')}}">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0" href="{{route('contact')}}">Contáctanos</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
