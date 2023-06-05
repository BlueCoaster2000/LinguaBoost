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

    public function mostrarCursoPorIdiomaYNivel($idioma, $nivel) //Función para buscar unn curso por su idioma y nivel
    {
       
        $cursoEncontrado = Curso::where('idioma', $idioma)->where('nivel', $nivel)->firstOrFail();
        $cursoNuevo = new Curso($cursoEncontrado['idioma'], $cursoEncontrado['nivel'], $cursoEncontrado['preguntas']);


        if (!empty($cursoNuevo)) { //si cursoNuevo no está vacio

            return view('cursos.mostrar-curso', ['cursoEncontrado' => $cursoNuevo]); //devuelvo ese curso
        } else {
            return view('cursos.curso-no-encontrado'); //Devuelvo una vista de CURSO NO ENCONTRADO
        }
    }
}
