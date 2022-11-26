<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all()->toArray();
        return array_reverse($cursos);      
    }
    public function store(Request $request)
    {
        $curso = new Curso([
            'codigo_curso' => $request->input('codigo_curso'),
            'descripcion' => $request->input('descripcion')
        ]);
        $curso->save();
        return response()->json('Curso Creado!');
    }

    public function destroy($codigo_curso)
    {
        $curso = Curso::find($codigo_curso);
        $curso->delete();
        return response()->json('Curso Eliminado!');
    }
}
