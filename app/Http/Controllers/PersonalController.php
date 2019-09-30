<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registros_adicionales()
    {
        $personals = Personal::all();

        $title = 'Personal de la Fuerza Aerea';

        return view('personal.registros_adicionales', compact('title', 'personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function nuevo()
    {
        return view('personal.registro_personal');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'per_paterno' => 'required',
            'per_materno' => 'required',
            'per_nombre' => 'required',
            'per_fecha_nacimiento' => 'required',
            'per_estado_civil' => 'required',
            'per_sexo' => 'required',
            'per_ci' => 'required',
            'per_expedido' => 'required',
            'per_telefono' => 'required',
            'per_celular' => 'required',
            'per_mail' => 'required',
            'per_domicilio' => 'required',
            'per_cm' => 'required',
            'per_prof_libre' => 'required',
            'per_seguro' => 'required',
            'per_serv_mil' => 'required',
            'per_religion' => 'required',
            
        ], [
            'per_nombre.required' => 'El campo Nombre es obligatorio',
            'per_paterno.required' => 'El campo Apellido Paterno es obligatorio',
            'per_materno.required' => 'El campo Apellido Materno es obligatorio',
        ]);

        Personal::create([
            'per_paterno' => $data['per_paterno'],
            'per_materno' => $data['per_materno'],
            'per_nombre' => $data['per_nombre'],
            'per_fecha_nacimiento' => $data['per_fecha_nacimiento'],
            'per_estado_civil' => $data['per_estado_civil'],
            'per_sexo' => $data['per_sexo'],
            'per_ci' => $data['per_ci'],
            'per_expedido' => $data['per_expedido'],
            'per_telefono' => $data['per_telefono'],
            'per_celular' => $data['per_celular'],
            'per_mail' => $data['per_mail'],
            'per_domicilio' => $data['per_domicilio'],
            'per_prof_libre' => $data['per_prof_libre'],
            'per_seguro' => $data['per_seguro'],
            'per_serv_mil' => $data['per_serv_mil'],
            'per_religion' => $data['per_religion'],
        ]);

        return redirect()->route('personal.registro_personal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
