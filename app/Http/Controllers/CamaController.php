<?php

namespace App\Http\Controllers;

use App\cama;
use Illuminate\Http\Request;

class CamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['camas']=\DB::select('SELECT idcama,no_cama,fecha_asig,pacientes.nombres,pacientes.apellidos,plantas.nombre
        from camas inner join pacientes on pacientes.no_carne=camas.paciente_no_carne
        inner join plantas on plantas.no_planta=camas.planta_no_planta');
        return view('cama.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $buscarpaciente=[\DB::table('pacientes')->get(),\DB::table('plantas')->get()];
        return view('cama.crear',compact('buscarpaciente'));
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
        $datosCama=request()->except('_token');
        cama::insert($datosCama);
        return redirect ('cama')->with('Mensaje','Datos ingresados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function show(cama $cama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $buscarcama=cama::findOrFail($id);
        $buscarpaciente=[\DB::table('pacientes')->get(),\DB::table('plantas')->get()];
        return view ('cama.edit',compact('buscarcama'),compact('buscarpaciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosCama=request()->except(['_token','_method']);
        cama::where('idcama','=',$id)->update($datosCama);
        return redirect ('cama')->with('Mensaje','Datos editados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        cama::destroy($id);
        return redirect ('cama')->with('Mensaje','Datos Eliminados Correctamente');
    }
}