<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="icon" href="images/world.svg">
    <title>LinguaBoost</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary barranav">
            <div class="container-fluid text-center">
                <a class="navbar-brand">
                    <h2 class="marca"><a style="text-decoration: none; " href="{{url('/espacio-personal')}}">LinguaBoost</a></h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#misCursos">
                                Mis Cursos
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
            </div>
        </nav>
    </header>