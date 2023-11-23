<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiante::all();
        return response()->json($estudiantes);
    }

    public function store(Request $request)
    {
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante, 201);
    }

    public function show(Estudiante $estudiante, $id)
    {
        $estudiante = Estudiante::find($id);
        return response()->json($estudiante);
    }

    public function update(Request $request, Estudiante $estudiante, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->update($request->all());
        return response()->json($estudiante);
    }

    public function destroy(Estudiante $estudiante, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return response()->json(null, 204);
    }
}
