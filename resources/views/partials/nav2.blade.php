<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary barranav">
        <div class="container-fluid text-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand">
                    <h2 class="marca">LinguaBoost</h2>
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/personal')}}">
                            Personal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursosNuevos">
                            Cursos Nuevos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursosTerminados">
                            Cursos Terminados
                        </a>
                    </li>
                </ul>
                @auth
                <a href="{{url('/logout')}}">
                    <div class="btn btn-danger">Cerrar Sesion( {{auth()->user()->name}} )</div>

                </a>

                @endauth
            </div>
    </nav>
</header>