@section('form')
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nombres</label>
        <input type="text" class="form-control" name="nombre_visita" placeholder="Ingrese nombres de la visita"
            value="{{isset($buscarvisita->nombre_visita)?$buscarvisita->nombre_visita:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Numero de visita</label>
        <input type="text" class="form-control" name="no_visitas" placeholder="Ingrese el Numero de la visita"
            value="{{isset($buscarvisita->no_visitas)?$buscarvisita->no_visitas:''}}" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label>Horario</label>
        <input type="time" class="form-control" name="horario" placeholder="Ingrese la hora"
            value="{{isset($buscarvisita->horario)?$buscarvisita->horario:''}}" required>
    </div>
    <div class="form-group col-md-3">
        <label>Duracion</label>
        <input type="number" class="form-control" name="duracion" id="duracion"
            placeholder="Ingrese la duracion de la visita"
            value="{{isset($buscarvisita->duracion)?$buscarvisita->duracion:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Paciente</label>
        <select name="paciente_no_carne" class="custom-select" id="paciente_no_carne">
            @foreach($buscarpaciente as $paciente)
            @if(isset($buscarvisita))
            @if($paciente->no_carne===$buscarvisita->paciente_no_carne)
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
</div>
@stop