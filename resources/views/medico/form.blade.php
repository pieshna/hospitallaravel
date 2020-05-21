@section('form')
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nombres</label>
        <input type="text" class="form-control" name="nombres" placeholder="Ingrese nombres"
            value="{{isset($buscarmedico->nombres)?$buscarmedico->nombres:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese apellidos"
            value="{{isset($buscarmedico->apellidos)?$buscarmedico->apellidos:''}}" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Codigo</label>
        <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo del medico"
            value="{{isset($buscarmedico->codigo)?$buscarmedico->codigo:''}}" required>
    </div>

    <div class="form-group col-md-6">
        <label>Especialidad</label>
        <input type="text" class="form-control" name="especialidad" placeholder="Ingrese la especialidad del medico"
            value="{{isset($buscarmedico->especialidad)?$buscarmedico->especialidad:''}}" required>
    </div>
</div>

@stop