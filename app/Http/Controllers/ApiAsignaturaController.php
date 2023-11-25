<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class ApiAsignaturaController extends Controller
{

    public function index()
    {
        $asignaturas = Asignatura::all();
        return $asignaturas;
    }

    public function store(Request $request)
    {
        $asignatura = new Asignatura();
        $asignatura->nombre = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->creditos = $request->creditos;
        $asignatura->area_conocimiento = $request->area_conocimiento;
        $asignatura->tipo_materia = $request->tipo_materia;

        $asignatura->save();

        return $asignatura;
    }

    public function update(Request $request)
    {
        $asignatura = Asignatura::findOrFail($request->id);
        $asignatura->nombre = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->creditos = $request->creditos;
        $asignatura->area_conocimiento = $request->area_conocimiento;
        $asignatura->tipo_materia = $request->tipo_materia;

        $asignatura->save();

        return $asignatura;
    }

    public function destroy(Request $request)
    {
        $asignatura = Asignatura::destroy($request->id);

        return $asignatura;
    }
}
