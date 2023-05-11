@include('cursos.partialsCursos.nav')
<?php

use app\Models\Curso;

$curso = new Curso('De', 1, [['pregunta' => '¿Fon isses gut?', 'respuesta' => 'foninter gepel gippesa'],]);
echo $curso;
?>
<h1>Bienvenido al Curso de Alemán</h1>

@include('cursos.partialsCursos.footer')