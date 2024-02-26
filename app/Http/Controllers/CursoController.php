<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Puedes implementar lógica para mostrar un formulario de creación si es necesario.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_del_curso' => 'required|string|max:255',
            'estudiante_id' => [
                'required',
                'exists:estudiantes,id',
            ],
        ]);

        $curso = new Curso();
        $curso->nombre_del_curso = $request->input('nombre_del_curso');
        $curso->estudiante_id = $request->input('estudiante_id');
        $curso->save();

        return response()->json(['message' => 'Curso creado con éxito']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return response()->json($curso);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        // Puedes implementar lógica para mostrar un formulario de edición si es necesario.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_del_curso' => 'required|string|max:255',
            'estudiante_id' => [
                'required',
                'exists:estudiantes,id',
            ],
        ]);

        $curso = Curso::findOrFail($id);
        $curso->nombre_del_curso = $request->input('nombre_del_curso');
        $curso->estudiante_id = $request->input('estudiante_id');
        $curso->save();
    
        return response()->json(['message' => 'Curso actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return response()->json(null, 204);
    }
}
