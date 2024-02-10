@extends('layouts/plantilla')

@section('title', 'show ' . $curso)

@section('content')
    <h1>
       estas en el curso {{$curso}}
    </h1>
@endsection