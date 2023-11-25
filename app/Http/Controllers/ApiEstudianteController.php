<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class ApiEstudianteController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiante::all();
        return $estudiantes;
    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->documento = $request->documento;
        $estudiante->nombre = $request->nombre;
        $estudiante->telefono = $request->telefono;
        $estudiante->email = $request->email;
        $estudiante->direccion = $request->direccion;
        $estudiante->ciudad = $request->ciudad;
        $estudiante->semestre = $request->semestre;

        $estudiante->save();
    }


    public function update(Request $request)
    {
        $estudiante = Estudiante::findOrFail($request->documento);
        $estudiante->documento = $request->documento;
        $estudiante->nombre = $request->nombre;
        $estudiante->telefono = $request->telefono;
        $estudiante->email = $request->email;
        $estudiante->direccion = $request->direccion;
        $estudiante->ciudad = $request->ciudad;
        $estudiante->semestre = $request->semestre;

        $estudiante->save();

        return $estudiante;
    }

    public function destroy(Request $request)
    {
        $estudiante = Estudiante::destroy($request->documento);

        return $estudiante;
    }
}
