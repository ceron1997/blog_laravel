@extends('layouts/plantilla')

@section('title', 'create')

@section('content')
    <h1>
        para edicion de cursos
    </h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <table>
            <tr>
                <td>NOMBRE</td>
                <td><input type="text" name="name" value="{{ old('name',$curso->name) }}" >
                    @error('name')
                        <span>* {{ $message }}</span>
                    @enderror
                </td>

            </tr>
            <tr>
                <td>DESCRIPCION</td>
                <td>
                    <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion )}}</textarea>
                    @error('descripcion')
                        <span>* {{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>CATEGORIA</td>
                <td><input type="text" name="categoria" value="{{ old('categoria',$curso->categoria) }}">
                    @error('categoria')
                        <span>* {{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Actualizar Formulario</button>
                </td>
            </tr>
        </table>

    </form>
@endsection
