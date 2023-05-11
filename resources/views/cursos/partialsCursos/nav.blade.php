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


        <!-- Nada por que es la primera vez que lo hace -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary barranav">
            <div class="container-fluid text-center">
                <a class="navbar-brand">
                    <h2 class="marca">LinguaBoost</h2>
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a href="{{url('/espacio-personal')}}" class="nav-link">Tus Cursos</a>
                    </li>
                    @auth
                    <a href="{{url('/logout')}}">
                </ul>
                <div class="btn btn-danger">Cerrar Sesion( {{auth()->user()->name}} )</div>

                </a>


                @endauth

            </div>
        </nav>
    </header>