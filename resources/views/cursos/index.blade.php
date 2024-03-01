@extends('layouts/plantilla')

@section('title', 'cursos')

@section('content')
    <h1>
        listado de cursos
    </h1>

    <a href="{{ route('cursos.create') }}">crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso->id) }}"> {{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $cursos->links() }}
    {{-- no esta mostrando los botones de navegacion del paginado  --}}
@endsection
