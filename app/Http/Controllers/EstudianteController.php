<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return response()->json($estudiantes);
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
       

        $estudiante = new Estudiante();
        $estudiante ->dni = $request -> dni;
        $estudiante ->nombre = $request -> nombre;
        $estudiante ->apellido = $request -> apellido;
        $estudiante ->correo = $request -> correo;
        $estudiante -> save();
        return "estudiante creado";
    
        return response()->json(['message' => 'estudiante creado con éxito', 'data' => $estudiante], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return response()->json($estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        // Puedes implementar lógica para mostrar un formulario de edición si es necesario.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       

        $estudiante = Estudiante::findOrFail($id);
        $estudiante ->dni = $request -> dni;
        $estudiante ->nombre = $request -> nombre;
        $estudiante ->apellido = $request -> apellido;
        $estudiante ->correo = $request -> correo;
        $estudiante -> save();

        return response()->json(['message' => 'Estudiante actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return response()->json(null, 204);
    }
}
