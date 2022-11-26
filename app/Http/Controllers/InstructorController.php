<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Instructor;
use App\Models\Curso;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::with('curso')->get()->toArray();
        return array_reverse($instructors);      
    }
    public function store(Request $request)
    {
        $instructor = new Instructor([
            'codigo' => $request->input('codigo'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'observaciones' => $request->input('observaciones'),
            'curso_codigo' => $request->input('curso_codigo')

        ]);
        $instructor->save();
        return response()->json('Instructor Creado!');
    }

    public function destroy($codigo)
    {
        $instructor = Instructor::find($codigo);
        $instructor->delete();
        return response()->json('Instructor Eliminado!');
    }
}
