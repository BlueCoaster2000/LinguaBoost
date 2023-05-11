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
                <a class="navbar-brand">
                    <h2 class="marca">LinguaBoost</h2>
                </a>
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
        </nav>
    </header>
    <main>
        @auth
        <h2>Bienvenido <span class="nombreUser">{{auth()->user()->name}}</span> disfruta de tus cursos:</h2>
        <?php
        //Obtenemos los niveles del usuario auntenticado para discriminar en que puede elegir y que no

        $nivel_eng = Auth::user()->nivel_eng;
        $nivel_de = Auth::user()->nivel_de;
        $nivel_es = Auth::user()->nivel_es;
        $nivelesDeUsuario = [
            'espanyol' => $nivel_es,
            'ingles' => $nivel_eng,
            'aleman' => $nivel_de

        ]
        ?>
        <input type="number" id="nivel_eng" value="<?php echo ($nivel_eng); ?>">
        <input type="number" id="nivel_es" value="<?php echo ($nivel_es); ?>">
        <input type="number" id="nivel_de" value="<?php echo ($nivel_de); ?>">
        @endauth
        @guest
        <h2>¿Aún no estás registrado y quieres disfrutar LinguaBoost?</h2>
        <a href="{{url('/register')}}">
            <button class="btn btn-success" id="boton1">
                Registrate Aquí
            </button>
        </a>
        @endguest

        @auth
        <div class="row" id="misCursos">
            <h1 class="bannerCurso">MIS CURSOS:</h1>
            @if (!Auth::user()->cursoEmpezado($nivel_es) && !Auth::user()->cursoEmpezado($nivel_eng) && !Auth::user()->cursoEmpezado($nivel_de))
            <div class="alert alert-secondary">No has empezado ningún curso todavia <a href="#cursosNuevos"><button class="btn btn-primary">Descubre Nuevos Cursos</button></a></div>
            @else
            @if (Auth::user()->cursoEmpezado($nivel_es)) <div class="col-md-3 col-xl-3 col-sm-6"> <!--Si el curso está empezado lo muestro aqui-->
                <div class="card" style="width: 100%;">
                    <img src="images/hola.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="h1">NIVEL Español</p>
                        <p class="card-text">Bienvenido al curso de castellano en este aprenderás los básico para leer, hablar y escribir</p>


                        <a id="" href="{{url('/cursos/es')}}"><button class="btn btn-success">Empezar</button></a>
                    </div>
                </div>
            </div>
            @endif




            @if (Auth::user()->cursoEmpezado($nivel_de)) <!--Si el curso no está empezado no lo muestro aqui-->
            <div class="col-md-3 col-xl-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="images/hallo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="h1">NIVEL 1 Alemán</p>
                        <p class="card-text">Bienvenido al curso básico de alemán en este aprenderás los básico para leer, hablar y escribir</p>


                        <a href="{{url('/cursos/de')}}"><button class="btn btn-success">Empezar</button></a>





                    </div>
                </div>

            </div>
            @endif
            @if (Auth::user()->cursoEmpezado($nivel_eng)) <div class="col-md-3 col-xl-3 col-sm-6"> <!--Si el curso no está empezado no lo muestro aqui-->
                <div class="card" style="width: 100%;">
                    <img src="images/hello.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="h1">NIVEL <span id="eng_actual"></span> Inglés</p>
                        <p class="card-text">Bienvenido al curso de inglés en este aprenderás los básico para leer, hablar y escribir</p>



                        <a id="empezar_eng" href="{{url('/cursos/en')}}"><button class="btn btn-success">Empezar</button></a>


                        <!--<a href="{{url('/cursos/en')}}"><button class="btn btn-success">¿Quieres Repetirlo?</button></a>--->



                    </div>
                </div>

            </div>
            @endif
            @endif

            <div class="row" id="cursosTerminados">
                <h1 class="bannerCurso">CURSOS TERMINADOS:</h1>


                @if ($nivel_es < 0) @for ($i=1 ; $i <=$nivel_es;$i++) <div class="col-md-3 col-xl-3 col-sm-6">
                    <div class="card" style="width: 100%;">
                        <img src="images/hola.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="h1">NIVEL {{$i}} Español</p>
                            <p class="card-text">Bienvenido al curso de castellano en este aprenderás los básico para leer, hablar y escribir</p>

                            <a href="{{url('/cursos/es$i')}}"><button class="btn btn-success">¿Quieres Repetirlo?</button></a>



                        </div>
                    </div>
                    @endfor

                    @endif



                    @if ($nivel_eng > 0)
                    @for ($i=1 ; $i <$nivel_eng;$i++) <div class="col-md-3 col-xl-3 col-sm-6"> <!--Recorremos todos los cursos que ha completado el usuario para poder mostrarselos de nuevo-->
                        <div class="card" style="width: 100%;">
                            <img src="images/hello.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="h1">NIVEL {{$i}} Inglés</p>
                                <p class="card-text">Bienvenido al curso de inglés en este aprenderás los básico para leer, hablar y escribir</p>


                                <a href="{{url('/cursos/en'.$i)}}"><button class="btn btn-success">¿Quieres Repetirlo?</button></a>


                            </div>
                        </div>
            </div>
            @endfor
            @endif


        </div>
        </div>

        <!---Aquí se encuentran todos los cursos disponibles nuestra web-->
        <div class="row" id="cursosNuevos">
            <h1 class="bannerCurso">TODOS LOS CURSOS:</h1>
            <div class="col-md-3 col-xl-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="images/hola.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="h1">CURSO Español</p>
                        <p class="card-text">Bienvenido al curso de castellano en este aprenderás los básico para leer, hablar y escribir</p>

                        @if ($nivel_es == 0)


                        <a id="" href="{{url('/cursos/es')}}"><button class="btn btn-success">Empezar</button></a>
                        @else

                        <a href="{{url('/cursos/es')}}"><button class="btn btn-success">¿Quieres Repetirlo?</button></a>

                        @endif

                    </div>
                </div>

            </div>
            <div class="col-md-3 col-xl-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="images/hallo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="h1">CURSO Alemán</p>
                        <p class="card-text">Bienvenido al curso básico de alemán en este aprenderás los básico para leer, hablar y escribir</p>

                        @if ($nivel_de == 0)

                        <a href="{{url('/cursos/de')}}"><button class="btn btn-success">Empezar</button></a>
                        @else

                        <a href="{{url('/cursos/de')}}"><button class="btn btn-success">¿Quieres Repetirlo?</button></a>

                        @endif

                    </div>
                </div>

            </div>
            <div class="col-md-3 col-xl-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="images/hello.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="h1">CURSO Inglés</p>
                        <p class="card-text">Bienvenido al curso de inglés en este aprenderás los básico para leer, hablar y escribir</p>


                        <a id="empezar_eng" href="{{url('/cursos/en')}}"><button class="btn btn-success">Empezar</button></a>


                        <!--<a href="{{url('/cursos/en')}}"><button class="btn btn-success">¿Quieres Repetirlo?</button></a>--->


                    </div>
                </div>

            </div>
            @endauth

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

    <script>
        //Para coger el nivel de los usuarios y mostrarle segun que cursos
        let nivel_eng = document.getElementById('nivel_eng').value;
        let nivel_es = document.getElementById('nivel_es').value;
        let nivel_de = document.getElementById('nivel_de').value;
        let eng_actual = document.getElementById('eng_actual');
        eng_actual.innerText = nivel_eng;

        let empezar_eng = document.getElementById('empezar_eng'); //Para cambiar el valor del curso de ingles
        // alert(empezar_eng);
        empezar_eng.href += nivel_eng;
        //alert('Tu nivel de ingles es: ' + nivel_eng.value);
    </script>
</body>

</html>