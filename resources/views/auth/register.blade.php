<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>LinguaBoost</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary barranav">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="{{url('/')}}">
                    <h2>LinguaBoost</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/register')}}">Registrarse</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}">Iniciar sesión</a>
                        </li>

                        @endguest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="drop_lan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Selecciona tu idioma
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" onclick="changeLanguage('en')"><img class="icon_lan" src="images/en.svg">English</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" onclick="changeLanguage('es')"><img class="icon_lan" src="images/es.svg">Español</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" onclick="changeLanguage('de')"><img class="icon_lan" src="images/ger.svg">Deusch</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid ">
        <p class="h1 text-center">Crear una cuenta</p>
        @include('errors.message')
        <form method="POST" action="/register">
            @csrf
            <div class="form-outline mb-4 row">

                <label class="text-center">Nombre</label>
                <input type="text" name="name">
            </div>
            <div class="form-outline mb-4 row">
                <label class="text-center">Correo</label>
                <input type="email" name="email">
            </div>
            <div class="form-outline mb-4 row">
                <label class="text-center">Contraseña</label>
                <input type="password" name="password">
            </div>
            <div class="form-outline mb-4 row">
                <label class="text-center">Repita Contraseña</label>
                <input type="password" name="password_confirmation">
            </div>
            <div class="form-outline mb-4 row">
                <label class="text-center">Idioma Nativo</label>
                <select name="native_lang">
                    <option value="es">Español</option>
                    <option value="en">English</option>
                    <option value="de">Deutsch</option>
                </select>
            </div>
            <div class="form-outline mb-4 row">
                <input class="btn btn-success" type="submit" value="Registrarse">
            </div>

        </form>
    </main>

    <footer class="footer">
        <section class="mb-4 text-center">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">
            © 2023 Sebastian R

        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://kit.fontawesome.com/ba3b33f124.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>