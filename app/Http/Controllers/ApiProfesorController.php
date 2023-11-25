<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ApiProfesorController extends Controller
{

    public function index()
    {
        $profesores = Profesor::all();
        return $profesores;
    }

    public function store(Request $request)
    {
        $profesor = new Profesor();
        $profesor->documento = $request->documento;
        $profesor->nombre = $request->nombre;
        $profesor->telefono = $request->telefono;
        $profesor->email = $request->email;
        $profesor->direccion = $request->direccion;
        $profesor->ciudad = $request->ciudad;

        $profesor->save();
    }


    public function update(Request $request)
    {
        $profesor = Profesor::findOrFail($request->documento);
        $profesor->documento = $request->documento;
        $profesor->nombre = $request->nombre;
        $profesor->telefono = $request->telefono;
        $profesor->email = $request->email;
        $profesor->direccion = $request->direccion;
        $profesor->ciudad = $request->ciudad;

        $profesor->save();

        return $profesor;
    }

    public function destroy(Request $request)
    {
        $profesor = Profesor::destroy($request->documento);

        return $profesor;
    }
}
