<?php

namespace App\Http\Controllers;

use App\paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pacientes']=paciente::paginate(5);
        return view('paciente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paciente.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datosPaciente=request()->except('_token');
        paciente::insert($datosPaciente);
        return redirect ('paciente')->with('Mensaje','Paciente agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buscarpaciente=paciente::findOrFail($id);
        return view ('paciente.edit',compact('buscarpaciente'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPaciente=request()->except(['_token','_method']);
        paciente::where('no_carne','=',$id)->update($datosPaciente);
        return redirect ('paciente')->with('Mensaje','Paciente editado exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        paciente::destroy($id);
        return redirect ('paciente')->with('Mensaje','Paciente Eliminado');
    }
}
