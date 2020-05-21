@include('template')
@yield('header')

<div class="container">
</div>
<div class="container-fluid table-responsive">
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <h1 style="font-size: 60px;" class="text-center">Registro de Bitacoras</h1>
    </div>
    @if(Session::has('Mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('Mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary btn-lg " href="{{url('/bitacora/create')}}">Nuevo</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr class='bg-info'>
                <th scope="col">Id de bitacora</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Diagnostico</th>
                <th scope="col">Fecha del diagnostico</th>
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bitacoras as $bitacora)
            <tr>
                <td>{{$bitacora->idbitacora}}</td>
                <td>{{$bitacora->fecha_ingreso}}</td>
                <td>{{$bitacora->diagnostico}}</td>
                <td>{{$bitacora->fecha_diagnostico}}</td>
                <td>{{$bitacora->nombres.' '.$bitacora->apellidos}}</td>
                <td>{{$bitacora->mnombres.' '.$bitacora->mapellidos}}</td>
                <td>
                    <div class="row">
                        <a href="{{url('/bitacora/'.$bitacora->idbitacora.'/edit')}}" class="btn btn-warning"
                            style='margin-right: 1rem'>Editar</a>

                        <form method="post" action="{{url('/bitacora/'.$bitacora->idbitacora)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar Datos?');"
                                class="btn btn-danger">Borrar</button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@yield('footer')