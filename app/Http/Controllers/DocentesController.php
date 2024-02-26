<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;

class DocentesController extends Controller
{
    /**
     * Muestra una lista de todos los docentes.
     */
    public function index()
    {
        $docentes = Docentes::all();
        return response()->json($docentes);
    }

    /**
     * Almacena un nuevo docente en el sistema.
     */
    public function store(Request $request)
{
    

    $docente = new Docentes();
    $docente ->dni = $request -> dni;
    $docente ->nombre = $request -> nombre;
    $docente ->apellido = $request -> apellido;
    $docente ->correo = $request -> correo;
    $docente -> save();
    return "docente creado";

    return response()->json(['message' => 'Docente creado con éxito', 'data' => $docente], 201);
}
    /**
     * Muestra la información de un docente específico.
     */
    public function show($id)
    {
        $docente = Docentes::findOrFail($id);
        return response()->json($docente);
    }

    /**
     * Actualiza la información de un docente existente.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'dni' => 'required|string|unique:docentes,dni,' . $id,
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo' => 'required|email|unique:docentes,correo,' . $id,
        ]);

        $docente = Docentes::findOrFail($id);
        $docente->dni = $request->input('dni');
        $docente->nombre = $request->input('nombre');
        $docente->apellido = $request->input('apellido');
        $docente->correo = $request->input('correo');
        $docente->save();

        return response()->json(['message' => 'Docente actualizado con éxito', 'data' => $docente], 200);
    }

    /**
     * Elimina un docente del sistema.
     */
    public function destroy($id)
    {
        $docente = Docentes::findOrFail($id);
        $docente->delete();

        return response()->json(['message' => 'Docente eliminado con éxito'], 204);
    }
}
