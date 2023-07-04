<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lstAlumnos = Alumno::all(); //Obtener todos los alumnos desde la base de datos
        return view('alumnos', compact('lstAlumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearAlumno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->apelido = $request->input('apellido');
        $alumno->correo = $request->input('correo');
        $alumno->edad = $request->input('edad');

        $alumno->save();
        
        return redirect('/alumnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idAlumno)
    {
        //
        $alumno = Alumno::find($idAlumno);
        $alumno->delete();

        return 'Registro: '.$alumno->name.' eliminado';
    }
}
