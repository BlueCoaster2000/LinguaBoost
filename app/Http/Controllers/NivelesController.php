<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NivelesController extends Controller
{

    public function actualizarNivel(Request $request)
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Obtener el idioma que ha sido completado en el formulario
        $idioma = $request->input('idioma');
        var_dump($user);
        // Incrementar el nivel correspondiente
        $user->subirNivel($idioma);

        // Redirigir al usuario a una página de éxito o a otra página de su elección
        return redirect('/espacio-personal');
    }
}
