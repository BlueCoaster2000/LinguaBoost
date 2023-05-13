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
                <a class="navbar-brand" href="">
                    <h2>LinguaBoost</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="{{url('/login')}}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{url('/register')}}" class="nav-link">Register</a></li>
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
    <main>
        <section id="section1" class="container-fluid">
            <div class="row md-12">

                <div class="col-md-3 text-center">

                    <img class="img-fluid w-100" src="images/world.svg">

                </div>
                <div class=" col-md-9 text-center">

                    <h1 id="titulo">
                        ¡Bienvenid@ a la mejor página para aprender idiomas gratis!
                    </h1>
                    <div class="d-block">
                        <a href="{{url('/register')}}">
                            <button class="btn btn-success" id="boton1">
                                EMPIEZA AHORA
                            </button>
                        </a>
                        <a href="{{url('/login')}}">

                            <button class="btn btn-secondary" id="boton2">
                                YA TENGO CUENTA
                            </button>
                        </a>

                    </div>
                </div>
            </div>

        </section>
        <section class="container-fluid text-center" id="section2">
            <h2 id="titulo2">¿Por qué debes usar LinguaBoost?</h2>
            <div class="row">
                <div class="col div1">
                    <h3><i class="fa-solid fa-fire-flame-curved" style="color: #ff8800;"></i> Apredizaje Efectivo</h3>
                    <p>Aprende rápido a leer, escuchar y hablar en otro idioma </p>
                </div>
                <div class="col div2">
                    <h3><i class="fa-solid fa-circle-check" style="color: #05ff22;"></i></i> Aprende a tu manera</h3>
                    <p>Basamos tu aprendizaje en tus preferencias, tu eliges tú camino a la hora de aprender un nuevo idioma </p>
                </div>
            </div>
            <div class="row">
                <div class="col div3">
                    <h3><i class="fa-solid fa-dumbbell"></i> Nunca te rindas </h3>
                    <p>En LinguaBoost &copy; no queremos que pierdas la motivación a la hora de aprender un nuevo idioma</p>
                </div>
                <div class="col div4">
                    <h3><i class="fa-solid fa-face-laugh-squint" style="color: #f1fe39;"></i> Diversión Sin Limites </h3>
                    <p>¿Quien dijo que no se puede aprender diviertondose? Con nuestros formularios interactivos aprenderás sin darte cuenta</p>
                </div>
            </div>
        </section>
        <section class="container-fluid text-center" id="section3">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12 text-center">

                    <h3 class="text-center">Aprende a cualquier hora, donde quieras.</h3>
                    <p class="text-center">
                        Usa nuestra aplicación móvil para tus ratos libres o durante tus viajes. Descargala en la Apple store o App Store, encontrás miles de valoraciones positivas que avalan nuestra efectividad.

                    </p>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-6 col-sm-12">

                    <img class="img-fluid" src="images/applogoapple.jpg" alt="">
                </div>
                <div class=" col-md-6 col-sm-12 ml-1">

                    <img class="img-fluid" src="images/applogoandroid.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid" id="section4">
            <div class="row">
                <h3 class="text-center ">¿Quieres aprender con un nativo?</h3>
                <p class="text-center pb-5">No dudes en hablar con alguno de nuestros expertos</p>
                <div class="row d-flex align-center paises">
                    <div class="col-xl-3 col-sm-6 col-6"><img src="/images/paises/espana.png" alt=""></div>
                    <div class="col-xl-3 col-sm-6 col-6"><img src="/images/paises/bandera-de-brasil.png" alt=""></div>
                    <div class="col-xl-3 col-sm-6 col-6"><img src="/images/paises/reino-unido.png" alt=""></div>
                    <div class="col-xl-3 col-sm-6 col-6"><img src="/images/paises/alemania.png" alt=""></div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="container-fluid">
            <ul class="row text-center" style="list-style:none;">
                <a href="{{url('/login')}}" class="nav-link col-md-2 col-xs-2 ">Iniciar Sesión</a>
                <a href="{{url('/register')}}" class="nav-link col-md-2 col-xs-2">Registrarse</a>

                <li class="col-md-2 col-sm-6"><button class="dropdown-item" onclick="changeLanguage('en')">English</button></li>

                <li class="col-md-2 col-sm-6"><button class="dropdown-item" onclick="changeLanguage('es')">Español</button></li>

                <li class="col-md-2 col-sm-1"><button class="dropdown-item" onclick="changeLanguage('de')">Deusch</button></li>
            </ul>
        </section>
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
        function changeLanguage(lan) {
            let titulo = document.querySelector('#titulo');
            let boton1 = document.querySelector('#boton1');
            let boton2 = document.querySelector('#boton2');
            let drop = document.querySelector('#drop_lan');
            //Divs de contenido del inicio y titulo
            let titulo2 = document.querySelector('#titulo2');
            titulo2.innerText = "maricon";
            let div1 = document.querySelector(".div1");
            let div2 = document.querySelector(".div2");
            let div3 = document.querySelector(".div3");
            let div4 = document.querySelector(".div4");
            switch (lan) {
                case "es":
                    titulo.innerText = "¡Bienvenid@ a la mejor página para aprender idiomas gratis!";
                    boton1.innerText = "EMPIEZA AHORA";
                    boton2.innerText = "TENGO CUENTA";
                    titulo2.innerText = "¿Por qué debes usar LinguaBoost?";
                    drop.innerText = "Selecciona tu idioma";
                    div1.innerHTML = '<h3><i class="fa-solid fa-fire-flame-curved" style="color: #ff8800;"></i> Apredizaje Efectivo</h3><p>Aprende rápido a leer, escuchar y hablar en otro idioma </p>';
                    div2.innerHTML = '<h3><i class="fa-solid fa-circle-check" style="color: #05ff22;"></i></i> Aprende a tu manera</h3><p>Basamos tu aprendizaje en tus preferencias, tu eliges tú camino a la hora de aprender un nuevo idioma </p>'
                    div3.innerHTML = '<h3><i class="fa-solid fa-dumbbell"></i> Nunca te rindas </h3><p>En LinguaBoost &copy; no queremos que pierdas la motivación a la hora de aprender un nuevo idioma</p>';
                    div4.innerHTML = '<h3><i class="fa-solid fa-face-laugh-squint" style="color: #f1fe39;"></i> Diversión Sin Limites </h3><p>¿Quien dijo que no se puede aprender diviertondose? Con nuestros formularios interactivos aprenderás sin darte cuenta</p>';

                    break;
                case "en":
                    titulo.innerText = "Welcome to the free and best page to learn a language!";
                    boton1.innerText = "START NOW";
                    boton2.innerText = "I HAVE ACCOUNT";
                    drop.innerText = "Select your language";
                    titulo2.innerText = "Why should you use LinguaBoost?";
                    div1.innerHTML = '<h3><i class="fa-solid fa-fire-flame-curved" style="color: #ff8800;"></i> Effective Learning</h3><p>Quickly learn to read, listen and speak in another language.</p>';
                    div2.innerHTML = '<h3><i class="fa-solid fa-circle-check" style="color: #05ff22;"></i> Learn in your own way</h3><p>We base your learning on your preferences, you choose your path when it comes to learning a new language.</p>'
                    div3.innerHTML = '<h3><i class="fa-solid fa-dumbbell"></i> Never give up </h3><p>At LinguaBoost &copy; we don"t want you to lose motivation or get off track when it comes to learning a new language. < /p>';
                    div4.innerHTML = '<h3><i class="fa-solid fa-face-laugh-squint" style="color: #f1fe39;"></i> Fun Without Limits </h3> <p>Who said you can"t learn while having fun? With our interactive forms you will learn without even realising it!</p>';
                    break;
                case "de":
                    titulo.innerText = "Willkommen auf der kostenlosen und besten Seite zum Lernen einer Sprache!";
                    boton1.innerText = "JETZT STARTEN";
                    boton2.innerText = "ICH HABE EINEN ACCOUNT";
                    drop.innerText = "Wählen Sie Ihre Sprache";

                    break;

                default:
                    titulo.innerText = "¡Bienvenid@ a la mejor página para aprender idiomas gratis!";
                    boton1.innerText = "EMPIEZA AHORA";
                    boton2.innerText = "TENGO CUENTA";
                    titulo2.innerText = "¿Por qué debes usar LinguaBoost?";
                    drop.innerText = "Selecciona tu idioma";
                    div1.innerHTML = '<h3><i class="fa-solid fa-fire-flame-curved" style="color: #ff8800;"></i> Apredizaje Efectivo</h3><p>Aprende rápido a leer, escuchar y hablar en otro idioma </p>';
                    div2.innerHTML = '<h3><i class="fa-solid fa-circle-check" style="color: #05ff22;"></i></i> Aprende a tu manera</h3><p>Basamos tu aprendizaje en tus preferencias, tu eliges tú camino a la hora de aprender un nuevo idioma </p>'
                    div3.innerHTML = '<h3><i class="fa-solid fa-dumbbell"></i> Nunca te rindas </h3><p>En LinguaBoost &copy; no queremos que pierdas la motivación a la hora de aprender un nuevo idioma</p>';
                    div4.innerHTML = '<h3><i class="fa-solid fa-face-laugh-squint" style="color: #f1fe39;"></i> Diversión Sin Limites </h3><p>¿Quien dijo que no se puede aprender diviertondose? Con nuestros formularios interactivos aprenderás sin darte cuenta</p>';
                    break;
            }

        }
    </script>
</body>

</html>