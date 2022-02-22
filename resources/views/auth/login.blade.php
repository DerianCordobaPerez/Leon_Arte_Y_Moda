<x-dashboard.layout title="Inicio de sesión">
    <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                    <h3 class="card-title text-left mb-3">Inicia sesión</h3>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input id="email" name="email" type="text" class="form-control p_input" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" name="password" type="password" class="form-control p_input" required />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <a href="#" class="forgot-pass">Recuperar contraseña</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block enter-btn">Inicia sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard.layout>
