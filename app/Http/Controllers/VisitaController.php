<?php

namespace App\Http\Controllers;

use App\visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['visitas']=\DB::select('SELECT idvisita,nombre_visita,no_visitas,horario,duracion,nombres,apellidos FROM visitas
        INNER JOIN pacientes ON paciente_no_carne=no_carne');
        return view('visita.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buscarpaciente=\DB::table('pacientes')->get();
        return view('visita.crear',compact('buscarpaciente'));
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
        $datosVisita=request()->except('_token');
        visita::insert($datosVisita);
        return redirect ('visita')->with('Mensaje','Visita agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function show(visita $visita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $buscarvisita=visita::findOrFail($id);
        $buscarpaciente=\DB::table('pacientes')->get();
        return view ('visita.edit',compact('buscarvisita'),compact('buscarpaciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosVisita=request()->except(['_token','_method']);
        visita::where('idvisita','=',$id)->update($datosVisita);
        return redirect ('visita')->with('Mensaje','Visita editada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        visita::destroy($id);
        return redirect ('visita')->with('Mensaje','Visita Eliminada');
    }
}
