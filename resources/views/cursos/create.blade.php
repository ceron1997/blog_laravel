@extends('layouts/plantilla')

@section('title', 'create')

@section('content')
    <h1>
        para creacion de cursos
    </h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>NOMBRE</td>
                <td><input type="text" name="name" value="{{old('name')}}">
                    @error('name')
                    <span  class="text-red-600" >* {{ $message }}</span>
                @enderror </td>
            </tr>
            <tr>
                <td>SLUG</td>
                <td><input type="text" name="slug" value="{{old('slug')}}">
                    @error('slug')
                    <span  class="text-red-600" >* {{ $message }}</span>
                @enderror </td>
            </tr>
            <tr>
                <td>DESCRIPCION</td>
                <td>
                    <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
                    @error('descripcion')
                    <span class="text-red-600">* {{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td>CATEGORIA</td>
                <td><input type="text" name="categoria" value="{{old('categoria')}}"> 
                    @error('categoria')
                    <span  class="text-red-600" >* {{ $message }}</span>
                @enderror
            </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Enviar Formulario</button>
                </td>
            </tr>
        </table>

    </form>
@endsection
