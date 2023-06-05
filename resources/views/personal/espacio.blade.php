@include('partials.nav')
<main>
    @guest
    <h2>¿Aún no estás registrado y quieres disfrutar LinguaBoost?</h2>
    <a href="{{url('/register')}}">
        <button class="btn btn-success" id="boton1">
            Registrate Aquí
        </button>
    </a>
    @endguest
    @auth
    <h2>Bienvenido<span class="nombreUser">{{auth()->user()->name}}</span>disfruta de tus cursos:</h2>
    <?php
    //Obtenemos los niveles del usuario auntenticado para discriminar en que puede elegir y que no

    $nivel_eng = Auth::user()->nivel_eng;
    $nivel_de = Auth::user()->nivel_de;
    $nivel_es = Auth::user()->nivel_es;
    $nivelesDeUsuario = [
        ['idioma' => 'spanish', 'nivel' => $nivel_es],
        ['idioma' => 'ingles', 'nivel' => $nivel_eng],
        ['idioma' => 'aleman', 'nivel' => $nivel_de]
    ];
    ?>

    <div class="row" id="misCursos">
        <h1 class="bannerCurso">MIS CURSOS:</h1>
        <!--Para mostrar los cursos Activos-->
        <div style="display:none"> <!--s-->
            {{$vacio=true}}
        </div>
        @foreach ($nivelesDeUsuario as $nivel)

        @if ($nivel['nivel'] > 0)
        {{$vacio = false}}
        <div class="col-md-3 col-xl-3 col-sm-6">
            <div class="card" style="width: 100%;">
                <img src="images/{{$nivel['idioma']}}.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="h1">CURSO {{$nivel['idioma']}} NIVEL {{$nivel['nivel']}}</p>
                    <p class="card-text">Bienvenido al curso de {{$nivel['idioma']}} en este aprenderás los básico para leer, hablar y escribir</p>


                    <a id="" href="{{ url('/curso/' . $nivel['idioma'] . '/' . $nivel['nivel']) }}"><button class="btn btn-success">Seguir Aprendiendo</button></a>
                </div>
            </div>
        </div>
        @endif

        @endforeach
        @if ($vacio == true)
        <div class="alert alert-primary">No hay cursos empezados</div>
        @endif
    </div>
    <div class="row" id="cursosNuevos">
        <h1 class="bannerCurso">CURSOS NUEVOS:</h1>
        <!--Para mostrar los cursos Activos-->
        @foreach ($nivelesDeUsuario as $nivel)

        @if ($nivel['nivel'] == 0)
        <div class="col-md-3 col-xl-3 col-sm-6">
            <div class="card" style="width: 100%;">
                <img src="images/{{$nivel['idioma']}}.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="h1">CURSO {{$nivel['idioma']}}</p>
                    <p class="card-text">Bienvenido al curso de {{$nivel['idioma']}} en este aprenderás los básico para leer, hablar y escribir</p>


                    <a href="{{ url('/curso/' . $nivel['idioma'] . '/' . $nivel['nivel']) }}"><button class="btn btn-success">Empezar</button></a>
                </div>
            </div>
        </div>
        @endif

        @endforeach
    </div>

    <!--Para mostrar los cursos Sin empezar-->
    <div id="cursosTerminados">
        <h1 class="bannerCurso">CURSOS TERMINADOS:</h1>
        <!--Para mostrar los cursos Activos-->
        <div style="display:none;position:absolute;">
            {{$vacio=true}}

            @foreach ($nivelesDeUsuario as $nivel)

            @if ($nivel['nivel'] != 0 )

            {{$vacio = false}}
            {{$tempoNivelMax = 7}}
            @if($nivel['idioma'] == 'ingles')
            {{$tempoNivelMax = $nivel_eng;}}


            @elseif ($nivel['idioma'] == 'aleman')
            {{$tempoNivelMax = $nivel_de;}}

            @elseif ($nivel['idioma'] == 'spanish')
            {{$tempoNivelMax = $nivel_es;}}


            @endif

        </div>
        <div class="row">

            @for ( $i = 0 ; $i < $tempoNivelMax; $i++) <!--Comentari-->
                <div class="col-md-3 col-xl-3 col-sm-6">
                    <div class="card" style="width: 100%;">
                        <img src="images/{{$nivel['idioma']}}.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="h1">CURSO {{$nivel['idioma']}} NIVEL {{$i}}</p>
                            <p class="card-text">Bienvenido al curso de {{$i}} en este aprenderás los básico para leer, hablar y escribir</p>


                            <a id="" href="{{ url('/curso/' . $nivel['idioma'] . '/' . $i) }}"><button class="btn btn-success">Seguir Aprendiendo</button></a>
                        </div>
                    </div>
                </div>

                @endfor
        </div>


        @endif

        @endforeach

        @if ($vacio == true)
        <div class="alert alert-primary">Cuando termines el nivel de un curso saldrá aquí</div>
        @endif
    </div>

    @endauth

</main>

@include('partials.footer')