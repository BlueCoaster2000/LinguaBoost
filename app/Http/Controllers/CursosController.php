<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;


class CursosController extends Controller
{
    public function mostrarCurso($id)
    {
        $curso = Curso::findOrFail($id);

        return view('mostrar-curso', ['curso' => $curso]);
    }

    public function mostrarCursoPorIdiomaYNivel($idioma, $nivel)
    {
        //$curso = new Curso("Spanish", 1, json_encode('{["pregunta1":"nonMateo","respuesta1":"peo"]}'));
        $cursoEncontrado = Curso::where('idioma', $idioma)->where('nivel', $nivel)->firstOrFail();
        $cursoNuevo = new Curso($cursoEncontrado['idioma'], $cursoEncontrado['nivel'], $cursoEncontrado['preguntas']);


        if (!empty($cursoNuevo)) {

            return view('cursos.mostrar-curso', ['cursoEncontrado' => $cursoNuevo]);
        } else {
            return view('cursos.curso-no-encontrado');
        }
    }
}
