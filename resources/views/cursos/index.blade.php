<h2>Elige entre miles de cursos</h2>
@foreach($cursos as $curso)
<h3>{{ $curso->nombre }}</h3>
<p>{{ $curso->descripcion }}</p>
<form action="{{ route('cursos.seguir', $curso->id) }}" method="POST">
    @csrf
    <button class="btn btn-primary" type="submit">Seguir curso</button>
</form>
@endforeach