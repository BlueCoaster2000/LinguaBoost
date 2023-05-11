@include('cursos.partialsCursos.nav')
@guest
<h1>¿No estás registrado y quieres disfrutar de todos los cursos?</h1>
<a href="{{url('/register')}}">
    <button class="btn btn-success">Registrate Aquí</button>

</a>
@endguest
@auth
<h1 class="text-center">Curso de {{ $cursoEncontrado->idioma }} nivel {{ $cursoEncontrado->nivel }}</h1>


<?php
$arrayPreguntas = json_decode($cursoEncontrado->preguntas, true);
/**Variable i para ir sumando y cambiando el id del div  */
$i = 1;
//var_dump($arrayPreguntas[0]['opciones']);
/*
@auth
$siglasIdioma =  strtolower(substr($cursoEncontrado->idioma,2));
$nivel_eng = Auth::user()->conocerNivel();
$nivel_es = Auth::user()->nivel_es;
$nivel_de = Auth::user()->nivel_de;
$nivelesUsuario = ['es' => $nivel_es, 'eng' => $nivel_eng, 'de' => $nivel_de];
echo "El nivel del usuario de español es " . $nivelUsuario['es'];
echo "El nivel del usuario de inglés es " . $nivelUsuario['eng'];
echo "El nivel del usuario de alemán es " . $nivelUsuario['de'];
@endauth*/
?>

<h1 class="text-center">Ejercicio <span id="numeroEjercicio"></span></h1>
<!--<img src="{{URL::asset('./images/apple.png')}}" alt="">-->
@foreach ( $arrayPreguntas as $pregunta )
@if ($i == 1)
<div id="ejercicio<?= $i ?>" class="text-center">
    @else
    <div id="ejercicio<?= $i ?>" class="text-center row mx-0 divEj" style="display:none;">
        @endif
        <h2 class="text-center">{{$pregunta['pregunta']}}</h2>
        @foreach ( $pregunta['opciones'] as $opciones )

        <button class="btn botonrespuesta col-md-4" onclick="validarPregunta('{{$opciones}}',`{{$pregunta['respuesta_correcta']}}`,'ejercicio<?= $i ?>')">{{$opciones}} </button>
        @endforeach

        <!--<p class="btn btn-primary">Respuesta: <strong>{{$pregunta['respuesta_correcta']}}</strong></p>--->




    </div>
    <input type="hidden" value="{{$i++}}">
    @endforeach
    <div id="ejercicio<?= $i ?>" class="text-center row mx-0" style="display:none;">
        <button class="btn btn-success botonEjercicio">Finalizar Curso</button>
    </div>

    <script src="{{ asset('js/ejercicios.js') }}">


    </script>
    <script>
        function audioFallaste() {
            /**Funcion para reproducir un audio*/
            let etiquetaAudio = document.createElement("audio");
            etiquetaAudio.setAttribute(
                "src",
                "{{ asset('../images/fail.mp3') }}"
            );
            etiquetaAudio.play();
        }
    </script>
    @include('cursos.partialsCursos.footer')
    @endauth