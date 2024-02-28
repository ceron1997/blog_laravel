@extends('layouts/plantilla')

@section('title', 'cursos')

@section('content')
    <h1>
        listado de cursos 
    </h1>

    <a href="{{route('create')}}">crear curso</a>
<ul>
    @foreach ($cursos as $curso)
     <li>{{$curso->name}}</li>
    @endforeach
</ul>
{{$cursos->links()}}  
{{-- nom esta mostrando los botones de navegacion del paginado  --}}
@endsection