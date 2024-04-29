<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();
        return view("alumnos.index", compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // creo un return de una vista que se llamara alumno.create
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {

        // con dd($request->input()) veo los datos del formulario

        $datos = $request->input();
        $alumnos = new Alumno($datos);
        session()->flash("status", "Se ha creado el alumno $alumnos->nombre ");
        $alumnos->save(); //guardamos
        return redirect()->route('alumnos.index'); //redirigimos a alumnos.index
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
        //laravel pasa el id del alumno y con eso me da el id del alumno en la tabla
        // creo un return de una vista y le paso el alumno
        return view("alumnos.edit" , compact("alumno"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
        $datos = $request->input();
        $alumno->update($datos); //actualiza este alumno con estos datos
        //añadimos una varaible de session
        session()->flash("status","Se han actualizado los datos de $alumno->nombre");
        return redirect()->route('alumnos.index'); //redirigimos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        // metodo borrar alumno
        //mostramos mensaje primero, para no brrar el nombre
        session()->flash("status", "Se ha borrado el alumno $alumno->nombre");
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
