<?php

namespace App\Http\Controllers;

use App\planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['planta']=planta::paginate(5);
        return view('planta.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('planta.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosPlanta=request()->except('_token');
        planta::insert($datosPlanta);
        return redirect ('planta')->with('Mensaje','La planta se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function show(planta $planta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $buscarPlanta=planta::findOrFail($id);
        return view ('planta.edit',compact('buscarPlanta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPlanta=request()->except(['_token','_method']);
        planta::where('no_planta','=',$id)->update($datosPlanta);
        
        //$buscarpaciente=paciente::findOrFail($id);
        //return view ('paciente.edit',compact('buscarpaciente'));
        return redirect ('planta')->with('Mensaje','La planta se ha editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        planta::destroy($id);
        return redirect ('planta')->with('Mensaje','Datos Eliminados Correctamente');
    }
}
