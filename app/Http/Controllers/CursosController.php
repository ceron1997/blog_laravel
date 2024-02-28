<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
class CursosController extends Controller
{


  public function index(){

    $cursos = Curso::paginate(); 
    return view("cursos.index", compact('cursos')); 
  }

  public function create(){
    return view("cursos.create"); 
  }

  public function show($curso){
     return view("cursos.show", compact('curso')); 
  }
}
