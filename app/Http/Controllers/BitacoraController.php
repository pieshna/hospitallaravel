<?php

namespace App\Http\Controllers;

use App\bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['bitacoras']=\DB::select('SELECT idbitacora, fecha_ingreso, diagnostico,fecha_diagnostico,pacientes.nombres,
        pacientes.apellidos,medicos.nombres AS mnombres,medicos.apellidos AS mapellidos FROM bitacoras
        iNNER JOIN pacientes ON paciente_no_carne=pacientes.no_carne
        INNER JOIN medicos ON medico_codigo=medicos.codigo');
        return view('bitacora.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buscarpaciente=[\DB::table('pacientes')->get(),\DB::table('medicos')->get()];
        return view('bitacora.crear',compact('buscarpaciente'));
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
        $datosBitacora=request()->except('_token');
        bitacora::insert($datosBitacora);
        return redirect ('bitacora')->with('Mensaje','Datos ingresados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(bitacora $bitacora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $buscarbitacora=bitacora::findOrFail($id);
        $buscarpaciente=[\DB::table('pacientes')->get(),\DB::table('medicos')->get()];
        return view ('bitacora.edit',compact('buscarbitacora'),compact('buscarpaciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosBitacora=request()->except(['_token','_method']);
        bitacora::where('idbitacora','=',$id)->update($datosBitacora);
        return redirect ('bitacora')->with('Mensaje','Datos editados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        cama::destroy($id);
        return redirect ('cama')->with('Mensaje','Datos Eliminados Correctamente');
    }
}
