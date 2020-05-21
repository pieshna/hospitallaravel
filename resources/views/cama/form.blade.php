@section('form')
<div class="form-row">
    <div class="form-group col-md-6">
        <label>No. Cama</label>
        <input type="text" class="form-control" name="no_cama" placeholder="Ingrese el numero de cama"
            value="{{isset($buscarcama->no_cama)?$buscarcama->no_cama:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Fecha de Asignacion</label>
        <input type="date" class="form-control" name="fecha_asig" placeholder="Ingrese la fecha de Asignacion"
            value="{{isset($buscarcama->fecha_asig)?$buscarcama->fecha_asig:''}}" required>
    </div>
</div>
<div class="form-group">
    <label>Paciente</label>
    <select name="paciente_no_carne" class="custom-select" id="paciente_no_carne">
        @foreach($buscarpaciente[0] as $paciente)
        @if(isset($buscarcama))
        @if($paciente->no_carne===$buscarcama->paciente_no_carne)
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
    <label>Planta</label>
    <select name="planta_no_planta" class="custom-select" id="planta_no_planta">
        @foreach($buscarpaciente[1] as $planta)
        @if(isset($buscarcama))
        @if($planta->no_planta===$buscarcama->planta_no_planta)
        <option value="{{$planta->no_planta}}" selected> {{$planta->nombre}} </option>
        @else
        <option value="{{$planta->no_planta}}"> {{$planta->nombre}} </option>
        @endif
        @else
        <option value="{{$planta->no_planta}}"> {{$planta->nombre}} </option>
        @endif
        @endforeach
    </select>
</div>

@stop