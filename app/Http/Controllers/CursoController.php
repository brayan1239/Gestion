<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function mostrar(){
        $cursos = Curso::All();
        return view("alumno.cursos", ["cursos"=>$cursos]);
    }
}
