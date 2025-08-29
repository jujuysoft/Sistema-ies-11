<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'dni' => 'required|string|max:10|unique:docentes',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'email' => 'required|string|max:100|unique:docentes',
            'fecha_ingreso' => 'required|date',
            'fecha_egreso' => 'required|date|nullable',
            'estado' => 'required|boolean:',
            'horas_laborales' => 'required|integer:',
        ]);

        Docente::create($request->all());
        return redirect()->route('docente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        return Inertia::render('Docente/edit', [
            'docente' => $docente
        ])
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'dni' => 'required|string|max:10|unique:docentes',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'email' => 'required|string|max:100|unique:docentes',
            'fecha_ingreso' => 'required|date',
            'fecha_egreso' => 'required|date|nullable',
            'estado' => 'required|boolean:',
            'horas_laborales' => 'required|integer:',
        ]);
        $docente -> update($request->all());
        return redirect()->route('docente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        $docente -> delete();
        return redirect()->route('docente.index');
    }
}
