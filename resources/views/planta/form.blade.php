@section('form')
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre de la planta"
            value="{{isset($buscarPlanta->nombre)?$buscarPlanta->nombre:''}}" required>
    </div>
    <div class="form-group col-md-6">
        <label>Total Camas</label>
        <input type="number" class="form-control" name="total_camas"
            placeholder="Ingrese el total de las camas en la planta"
            value="{{isset($buscarPlanta->total_camas)?$buscarPlanta->total_camas:''}}" required>
    </div>
</div>
@stop