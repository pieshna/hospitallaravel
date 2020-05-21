@section('form')
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nombres</label>
        <input type="text" class="form-control" name="nombres" placeholder="Ingrese nombres"
            value="{{isset($buscarpaciente->nombres)?$buscarpaciente->nombres:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese apellidos"
            value="{{isset($buscarpaciente->apellidos)?$buscarpaciente->apellidos:''}}" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Numero de Carne</label>
        <input type="text" class="form-control" name="no_carne" placeholder="Carne de seguro"
            value="{{isset($buscarpaciente->no_carne)?$buscarpaciente->no_carne:''}}" required>
    </div>

    <div class="form-group col-md-3">
        <label>DPI</label>
        <input type="text" class="form-control" name="dpi" placeholder="Ingrese DPI"
            value="{{isset($buscarpaciente->dpi)?$buscarpaciente->dpi:''}}" required>
    </div>
    <div class="form-group col-md-3">
        <label>Nacimiento</label>
        <input type="date" class="form-control" name="fecha_nac" id="fechanac"
            value="{{isset($buscarpaciente->fecha_nac)?$buscarpaciente->fecha_nac:''}}" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Localidad</label>
        <input type="text" class="form-control" name="localidad" placeholder="Ingrese localidad"
            value="{{isset($buscarpaciente->localidad)?$buscarpaciente->localidad:''}}" required>
    </div>
    <div class="form-group col-md-2">
        <label>Genero</label>
        <input type="text" class="form-control" name="genero" placeholder="M/F"
            value="{{isset($buscarpaciente->genero)?$buscarpaciente->genero:''}}" required>
    </div>
    <div class="form-group col-md-4">
        <label>Direccion</label>
        <input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion"
            value="{{isset($buscarpaciente->direccion)?$buscarpaciente->direccion:''}}" required>
    </div>
</div>
@stop