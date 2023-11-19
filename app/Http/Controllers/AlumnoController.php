<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\Auth;

class AlumnoController extends Controller
{
    public function mostrar(){
        $alumnos = Alumno::All();
        $id = Auth::id();
        return view("alumno.index", ["alumnos"=>$alumnos, "id"=>$id]);
    }

    public function editar($id){
        $alumno = Alumno::findOrFail($id);

        return view("formulario.actualizarInformacion", compact("alumno"));
    }
    
    public function actualizar(Request $request, $id){
        $request->validate([
            'apellido' => 'required',
            'celular' => 'required',
            'celular_2' => 'required',
            'dni' => 'required',
            'padre' => 'required',
            'madre' => 'required',
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->apellido = $request->input("apellido");
        $alumno->celular = $request->input("celular");
        $alumno->celular_2 = $request->input("celular_2");
        $alumno->dni = $request->input("dni");
        $alumno->padre = $request->input("padre");
        $alumno->madre = $request->input("madre");
        $alumno->save();

        $alumnos = Alumno::All();
        return view("alumno.index", ["alumnos"=>$alumnos]);
    }
}
