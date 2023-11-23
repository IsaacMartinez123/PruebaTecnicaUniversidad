<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
 
    public function index()
    {
        $asignaturas = Asignatura::all();
        return response()->json($asignaturas);
    }

    public function store(Request $request)
    {
        $asignatura = Asignatura::create($request->all());
        return response()->json($asignatura, 201);
    }

    public function show(Asignatura $asignatura, $id)
    {
        $asignatura = Asignatura::find($id);
        return response()->json($asignatura);
    }

    public function update(Request $request, Asignatura $asignatura, $id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->update($request->all());
        return response()->json($asignatura);
    }

    public function destroy(Asignatura $asignatura, $id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->delete();
        return response()->json(null, 204);
    }
}
