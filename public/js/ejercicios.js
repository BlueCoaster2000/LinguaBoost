function playAudio(ruta) {
    /**Funcion para reproducir un audio*/
    let etiquetaAudio = document.createElement("audio");
    etiquetaAudio.setAttribute("src", ruta);
    etiquetaAudio.play();
}
function audioAcierto() {
    /**Funcion para reproducir un audio*/
    let etiquetaAudio = document.createElement("audio");
    etiquetaAudio.setAttribute("src", "fail.mp3");
    etiquetaAudio.play();
}
function audioFail(ficheroEsperado) {
    /**Funcion para reproducir un audio*/
    let etiquetaAudio = document.createElement("audio");
    etiquetaAudio.setAttribute(
        "src",
        "{{ asset('../images/" + ficheroEsperado + "') }}"
    );
    etiquetaAudio.play();
}

function validarPregunta(respuestaUsuario, respuestaCorrecta, idPregunta) {
    playAudio("../images/exercises/" + respuestaUsuario + ".mp3");
    audioFail();
    let elemento = document.getElementById(idPregunta);
    if (respuestaCorrecta == respuestaUsuario) {
        playAudio("./ fail.mp3'");
        elemento.style.backgroundColor = "green";
        playAudio("../images/exercises/correcto.mp3");
        playAudio("{{ asset('./fail.mp3') }}");

        //Coger el último número del elemento para mostrar el siguiente ej
        let siguienteEj = parseInt(idPregunta.charAt(9));
        let elementoSiguiente = document.getElementById(
            "ejercicio" + (siguienteEj + 1) //Aquí obtengo el número del ejercicio siguiente
        );
        elemento.style.display = "none";

        elementoSiguiente.style.display = "";

        return true;
    } else {
        //playAudio("{{asset('images/fail.mp3'}}");
        playAudio("../images/exercises/fail.mp3");
        elemento.style.backgroundColor = "red";
        setTimeout(function () {
            elemento.style.backgroundColor = "";
        }, 1000);

        return false;
    }
}

function validarPreguntaInput(respuestaCorrecta, idInput, idPregunta) {
    alert("Esto se jodió");
    let respuestaUsuario = document.getElementById(idInput).value;
    if (respuestaCorrecta == respuestaUsuario) {
        let elemento = document.getElementById(idPregunta);
        elemento.style.display = "none";
        //Coger el último número del elemento para mostrar el siguiente ej
        let siguienteEj = parseInt(idPregunta.charAt(9));
        let elementoSiguiente = document.getElementById(
            "ejercicio" + (siguienteEj + 1) //Aquí obtengo el número del ejercicio siguiente
        );

        elementoSiguiente.style.display = "";

        return true;
    } else {
        return false;
    }
}
