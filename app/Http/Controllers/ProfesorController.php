<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{

    public function index()
    {
        $profesores = Profesor::all();
        return response()->json($profesores);
    }

    public function store(Request $request)
    {
        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }


    public function show(Profesor $profesor, $id)
    {
        $profesor = Profesor::find($id);
        return response()->json($profesor);
    }

    public function update(Request $request, Profesor $profesor, $id)
    {
        $profesor = Profesor::find($id);
        $profesor->update($request->all());
        return response()->json($profesor);
    }

    public function destroy(Profesor $profesor, $id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        return response()->json(null, 204);
    }
}
