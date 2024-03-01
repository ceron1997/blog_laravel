<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
class CursosController extends Controller
{


  public function index(){

    $cursos = Curso::Orderby('id', 'desc')->paginate(); 
    return view("cursos.index", compact('cursos')); 
  }

  public function create(){
    return view("cursos.create"); 
  }
  public function store(Request $request){

    $request->validate([
      'name'=>'required | min:3',
      'descripcion'=>'required',
      'categoria'=>'required'
    ]); 

    $curso = new Curso(); 
    $curso->name = $request->name; 
    $curso->descripcion = $request->descripcion; 
    $curso->categoria = $request->categoria;    
    $curso->save(); 
    return redirect()->route('cursos.show', $curso->id);
  }

  public function show($id){
    $curso = Curso::find($id);
     return view("cursos.show", compact('curso')); 
  }
  public function edit(Curso $curso){
    // esa manera de pedir el parametro desencadena de manera automatica una busqueda find(id) y devuelve el 
    // objeto correspondiente 
    return view("cursos.edit", compact('curso') ); 
  }

  public function update(Request $request, Curso $curso){
    $curso->name = $request->name; 
    $curso->descripcion = $request->descripcion; 
    $curso->categoria = $request->categoria; 
    $curso->save(); 
    return redirect()->route('cursos.show', $curso->id);
  }
}
