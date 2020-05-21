<?php

namespace App\Http\Controllers;

use App\medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['medicos']=medico::paginate(5);
        return view('medico.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medico.crear');
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
        $datosMedico=request()->except('_token');
        medico::insert($datosMedico);
        return redirect ('medico')->with('Mensaje','Medico agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $buscarmedico=medico::findOrFail($id);
        return view ('medico.edit',compact('buscarmedico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosMedico=request()->except(['_token','_method']);
        medico::where('codigo','=',$id)->update($datosMedico);
        return redirect ('medico')->with('Mensaje','Medico editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        medico::destroy($id);
        return redirect ('medico')->with('Mensaje','Medico Eliminado');
    }
}
