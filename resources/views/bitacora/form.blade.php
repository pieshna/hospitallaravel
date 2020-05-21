@section('form')
<div class="form-row">
    <div class="form-group col-md-3">
        <label>Fecha de ingreso</label>
        <input type="date" class="form-control" name="fecha_ingreso" placeholder="Ingrese la fecha de ingreso"
            value="{{isset($buscarbitacora->fecha_ingreso)?$buscarbitacora->fecha_ingreso:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Diagnostico</label>
        <input type="text" class="form-control" name="diagnostico" placeholder="Ingrese el diagnostico"
            value="{{isset($buscarbitacora->diagnostico)?$buscarbitacora->diagnostico:''}}" required>
    </div>
    <div class="form-group col-md-3">
        <label>Fecha del diagnostico</label>
        <input type="date" class="form-control" name="fecha_diagnostico" placeholder="Ingrese la fecha del diagnostico"
            value="{{isset($buscarbitacora->fecha_diagnostico)?$buscarbitacora->fecha_diagnostico:''}}" required>
    </div>
</div>
<div class="form-group">
    <label>Paciente</label>
    <select name="paciente_no_carne" class="custom-select" id="paciente_no_carne">
        @foreach($buscarpaciente[0] as $paciente)
        @if(isset($buscarbitacora))
        @if($paciente->no_carne===$buscarbitacora->paciente_no_carne)
        <option value="{{$paciente->no_carne}}" selected> {{$paciente->nombres." ".$paciente->apellidos}} </option>
        @else
        <option value="{{$paciente->no_carne}}"> {{$paciente->nombres." ".$paciente->apellidos}} </option>
        @endif
        @else
        <option value="{{$paciente->no_carne}}"> {{$paciente->nombres." ".$paciente->apellidos}} </option>

        @endif
        @endforeach
    </select>
</div>


<div class="form-group">
    <label>Medico</label>
    <select name="medico_codigo" class="custom-select" id="medico_codigo">
        @foreach($buscarpaciente[1] as $medico)
        @if(isset($buscarbitacora))
        @if($medico->codigo===$buscarbitacora->medico_codigo)
        <option value="{{$medico->codigo}}" selected> {{$medico->nombres.' '.$medico->apellidos}} </option>
        @else
        <option value="{{$medico->codigo}}"> {{$medico->nombres.' '.$medico->apellidos}} </option>
        @endif
        @else
        <option value="{{$medico->codigo}}"> {{$medico->nombres.' '.$medico->apellidos}} </option>
        @endif
        @endforeach
    </select>
</div>

@stop