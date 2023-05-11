@guest

<script>
    onload(window.history.go(-1))
</script>

@endguest

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
        @auth
        <?php
        $nivel_eng = Auth::user()->nivel_eng;
        ?>
        @if ($nivel_eng >= 1)
        <!-- Le recordamos al usuario que ya ha hecho este curso -->
        <h1 class="alert alert-warning">RECUERDA: Has completado ya este curso</h1>
        @else
        @endif
        @endauth

        <!-- Nada por que es la primera vez que lo hace -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary barranav">
            <div class="container-fluid text-center">
                <a class="navbar-brand">
                    <h2 class="marca">LinguaBoost</h2>
                </a>
                <a href="{{url('/personal')}}" class="nav-link">Tus Cursos</a>
                @auth
                <a href="{{url('/logout')}}">
                    <div class="btn btn-danger">Cerrar Sesion( {{auth()->user()->name}} )</div>

                </a>


                @endauth

            </div>
        </nav>
    </header>
    <h1 class="text-center">Curso De Inglés Nivel 0</h1>
    <main>
        <div class="contador_container">Aciertos: <input type="number" disabled name="contador" id="contador" value="0"></div>
        <h1 class="text-center">EJERCICIO <span id="numEj">1</span></h1>
        <div class="area_ejercicios col-12">
            <div id="ejercicio1">
                <h3 class="text-center">¿Cuál de estos es manzana?</h3>
                <button id="btn1" onclick="comprobarRespuesta('Apple','Apple')">
                    <img src="../images/apple.png" class="image_ej" alt="Apple" />Apple</button>

                <button id="btn2" onclick="comprobarRespuesta('lemon','Apple')">
                    <img src="../images/lemon.png" class="image_ej" alt="Lemon" />Lemon</button>

                <button id="btn3" onclick="comprobarRespuesta('watermelon','Apple')">
                    <img src="../images/watermelon.png" class="image_ej" alt="Watermelon" />Watermelon
                </button>
                <div id="resultado1"></div>
                <button class="btn btn-secondary" id="siguiente1" style="display:none;" onclick="mostrarSiguienteEsconderActual()">Siguiente Ejercicio</button>

            </div>
            <div id="ejercicio2" style="display: none;">
                <h3>Introduce el nombre de esta Fruta</h3>

                <img src="../images/lemon.png" class="image_ej" />
                <input type="text" size="1" class="valoresInpt" />
                <input type="text" size="1" class="valoresInpt" />
                <input type="text" size="1" class="valoresInpt" />
                <input type="text" size="1" class="valoresInpt" />
                <input type="text" size="1" class="valoresInpt" />
                <button class="btn btn-warning" onclick="obtenerRespuestaInputs('valoresInpt')">
                    Comprobar Resultado
                </button>
                <p id="palabra"></p>
                <div id="resultado2"></div>
                <button class="btn btn-secondary" id="siguiente2" style="display:none;" onclick="mostrarSiguienteEsconderActual()">Siguiente Ejercicio</button>
            </div>
            <div id="ejercicio3" style="display:none;">
                <h3>¿Que fruta dice en el audio?</h3>
                <button class="btn btn-primary" onclick="playAudio('../images/exercises/watermelon.mp3')">
                    <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M14,2c-0.781,0-1.313,0.438-2,1.016L6,8H2c-1.1,0-2,0.9-2,2v12c0,1.1,0.9,2,2,2h4l6,4.984C12.688,29.563,13.219,30,14,30  c1.219,0,2-0.984,2-2V4C16,2.984,15.219,2,14,2z M12,23.784L7.445,20H4v-8h3.445L12,8.216V23.784z M20,6c-1.25,0-2,1.047-2,2  c0,1.422,2,2.781,2,8s-2,6.578-2,8c0,0.953,0.75,2,2,2c1.016,0,1.625-0.547,2.281-2C23.51,21.279,24,18.672,24,16  s-0.49-5.279-1.719-8C21.625,6.547,21.016,6,20,6z M29.146,4c-0.838-1.771-1.63-2-2.333-2c-1.188,0-2,1-2,2  C24.813,5.672,28,8.531,28,16s-3.188,10.328-3.188,12c0,1,0.813,2,2,2c0.703,0,1.495-0.229,2.333-2C30.063,26.063,32,22.156,32,16  S30.063,5.938,29.146,4z" />
                    </svg>


                </button>

                <button onclick="comprobarRespuesta('Apple','watermelon')">
                    <img src="../images/apple.png" class="image_ej" alt="Apple" />Apple</button>

                <button onclick="comprobarRespuesta('lemon','watermelon')">
                    <img src="../images/lemon.png" class="image_ej" alt="Lemon" />Lemon</button>

                <button onclick="comprobarRespuesta('watermelon','watermelon')">
                    <img src="../images/watermelon.png" class="image_ej" alt="Watermelon" />Watermelon
                </button>
                <div id="resultado3"></div>
                <button class="btn btn-secondary" id="siguiente3" style="display:none;" onclick="mostrarSiguienteEsconderActual()">Siguiente Ejercicio</button>
            </div>
            <div id="ejercicio3" style="display:none;">
                <h3>¿Que fruta dice en el audio?</h3>
                <button class="btn btn-primary" onclick="playAudio('../images/exercises/watermelon.mp3')">
                    <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M14,2c-0.781,0-1.313,0.438-2,1.016L6,8H2c-1.1,0-2,0.9-2,2v12c0,1.1,0.9,2,2,2h4l6,4.984C12.688,29.563,13.219,30,14,30  c1.219,0,2-0.984,2-2V4C16,2.984,15.219,2,14,2z M12,23.784L7.445,20H4v-8h3.445L12,8.216V23.784z M20,6c-1.25,0-2,1.047-2,2  c0,1.422,2,2.781,2,8s-2,6.578-2,8c0,0.953,0.75,2,2,2c1.016,0,1.625-0.547,2.281-2C23.51,21.279,24,18.672,24,16  s-0.49-5.279-1.719-8C21.625,6.547,21.016,6,20,6z M29.146,4c-0.838-1.771-1.63-2-2.333-2c-1.188,0-2,1-2,2  C24.813,5.672,28,8.531,28,16s-3.188,10.328-3.188,12c0,1,0.813,2,2,2c0.703,0,1.495-0.229,2.333-2C30.063,26.063,32,22.156,32,16  S30.063,5.938,29.146,4z" />
                    </svg>


                </button>

                <button onclick="comprobarRespuesta('watermelon','Apple')">
                    <img src="../images/apple.png" class="image_ej" alt="Apple" />Apple</button>

                <button onclick="comprobarRespuesta('watermelon','lemon')">
                    <img src="../images/lemon.png" class="image_ej" alt="Lemon" />Lemon</button>

                <button onclick="comprobarRespuesta('watermelon','watermelon')">
                    <img src="../images/watermelon.png" class="image_ej" alt="Watermelon" />Watermelon
                </button>
                <div id="resultado3"></div>
                <button class="btn btn-secondary" id="siguiente3" style="display:none;" onclick="mostrarSiguienteEsconderActual()">Siguiente Ejercicio</button>
            </div>
            <div id="ejercicio4" style="display:none;">

                <h2>Traduce:</h2>
                <button class="btn btn-primary" onclick="playAudio('../images/exercises/anApplePlease.mp3')">
                    <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M14,2c-0.781,0-1.313,0.438-2,1.016L6,8H2c-1.1,0-2,0.9-2,2v12c0,1.1,0.9,2,2,2h4l6,4.984C12.688,29.563,13.219,30,14,30  c1.219,0,2-0.984,2-2V4C16,2.984,15.219,2,14,2z M12,23.784L7.445,20H4v-8h3.445L12,8.216V23.784z M20,6c-1.25,0-2,1.047-2,2  c0,1.422,2,2.781,2,8s-2,6.578-2,8c0,0.953,0.75,2,2,2c1.016,0,1.625-0.547,2.281-2C23.51,21.279,24,18.672,24,16  s-0.49-5.279-1.719-8C21.625,6.547,21.016,6,20,6z M29.146,4c-0.838-1.771-1.63-2-2.333-2c-1.188,0-2,1-2,2  C24.813,5.672,28,8.531,28,16s-3.188,10.328-3.188,12c0,1,0.813,2,2,2c0.703,0,1.495-0.229,2.333-2C30.063,26.063,32,22.156,32,16  S30.063,5.938,29.146,4z" />
                    </svg>
                    <h3>An apple please</h3>




                </button>
                <div class="respuesta_destino col-12 mb-4">
                    <input type="text" name="" disabled id="destinotext">
                </div>
                <button class="btn btn-light" onclick="escribirEnElInput('destinotext','por')">
                    por
                </button>

                <button class="btn btn-light" onclick="escribirEnElInput('destinotext','Una')">
                    Una
                </button>
                <button class="btn btn-light" onclick="escribirEnElInput('destinotext','Limón')">
                    Limón
                </button>
                <button class="btn btn-light" onclick="escribirEnElInput('destinotext','favor')">
                    favor
                </button>
                <button class="btn btn-light" onclick="escribirEnElInput('destinotext','manzana')">
                    manzana
                </button>

                <button class="btn btn-danger" onclick="borrarValueInput('destinotext')">Borrar Respuesta</button>
                <button class="btn btn-warning" onclick="obtenerRespuestaInputClick('destinotext','Una manzana por favor ')">Comprobar Respuesta</button>
                <div id="resultado4"></div>

                <button class="btn btn-secondary" id="siguiente4" style="display:none;" onclick="mostrarSiguienteEsconderActual()">Siguiente Ejercicio</button>
            </div>
            <div id="ejercicio5" style="display:none;">
                @auth

                @if ($nivel_eng < 1) <form method="POST" action="/actualizarNivel">
                    @csrf
                    <input type="hidden" name="idioma" value="eng">
                    <input type="submit" class="btn btn-success" value="Terminar Nivel 1">

                    </form>

                    @else
                    <a class="btn btn-success" href="{{url('/personal')}}">Terminar Nivel 1</a>


                    @endif
                    @endauth
            </div>
        </div>

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
        let area = document.querySelector('.area_ejercicios');
        /**
         * Respuestas Correctas
         */
        let respuesta1 = 'Apple';
        let respuesta2 = 'Lemon';
        let respuesta3 = 'Watermelon';


        //Borrar lo que lleva un input 

        function borrarValueInput(id) {
            document.getElementById(id).value = '';
        }
        //Respuesta Inputs EJ 2

        let palabraCompleta = '';

        function validarRespuesta(res, res_user) {
            if (res == res_user)
                return true;
            else
                return false;

        }

        function playAudio(ruta) {
            let etiquetaAudio = document.createElement("audio")
            etiquetaAudio.setAttribute("src", ruta);
            etiquetaAudio.play()

        }

        function obtenerRespuesta(id) { //Funcion para obtener el texto de dentro de un button
            return document.getElementById(id).value;

        }

        //Para escribir en el input que queramos el contenido de los botones.

        function escribirEnElInput(inputdestino, texto) {
            let destino = document.getElementById(inputdestino);

            destino.value += texto;
            destino.value += ' ';

        }




        let numEj = document.querySelector('#numEj');


        //Función para ir cambiando el cuerpo de area según el ejercicio que sea 
        function mostrarSiguienteEsconderActual() {
            let ejercicioActual = document.querySelector('#ejercicio' + parseInt(numEj.innerText));
            let ejercicicioSiguiente = document.querySelector('#ejercicio' + (parseInt(numEj.innerText) + 1));

            ejercicioActual.style.display = "none";
            ejercicicioSiguiente.style.display = '';
            numEj.innerText = (parseInt(numEj.innerText) + 1);

        }

        //Validar Respuesta Ejercicio 1 
        let contador = document.querySelector('#contador');

        function comprobarRespuesta(respuestaUsuario, respuestaCorrecta) {
            playAudio('../images/exercises/' + respuestaUsuario + '.mp3');
            let siguiente = document.querySelector('#siguiente' + numEj.innerText);
            let resultado = document.querySelector('#resultado' + numEj.innerText);
            if (respuestaCorrecta == respuestaUsuario) {
                contador.value++;
                playAudio('../images/exercises/correcto.mp3');

                siguiente.style.display = "";
                resultado.innerHTML = "<div class='alert alert-success'><h1>ACERTASTE</h1></div>"

            } else {

                playAudio('../images/exercises/fail.mp3');
                resultado.innerHTML = "<div class='alert alert-danger'><h1>FALLASTE</h1></div>"

            }
        }

        function obtenerRespuestaInputs(claseInputs) { //Función para obtener cada de letra de distintos inputs(ARRAY)
            palabraCompleta = '';
            let tempo = document.querySelectorAll('.' + claseInputs);
            for (let index = 0; index < tempo.length; index++) {

                palabraCompleta += tempo[index].value;

            }
            document.querySelector('#palabra').innerText = palabraCompleta;
            comprobarRespuesta('lemon', palabraCompleta);
        }

        function obtenerRespuestaInputClick(id, respuestaCorrecta) {
            let textoAanalizar = document.getElementById(id);
            console.log('EL valor del texto a analizar es: ' + textoAanalizar);
            console.log('La  respuesta correcta es: ' + respuestaCorrecta);
            if (textoAanalizar.value != '') {

                comprobarRespuesta(textoAanalizar.value, respuestaCorrecta);
            } else {
                alert("nos sos");
                comprobarRespuesta(textoAanalizar.value, 'Una manzana por favor');

            }

        }
    </script>
</body>

</html>