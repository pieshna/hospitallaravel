@include('template')
@yield('header')

<div class="container">
</div>
<div class="container-fluid table-responsive">
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <h1 style="font-size: 60px;" class="text-center">Lista de Pacientes</h1>
    </div>
    @if(Session::has('Mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('Mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary btn-lg " href="{{url('/paciente/create')}}">Nuevo</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr class='bg-info'>
                <th scope="col">No. Carne</th>
                <th scope="col">DPI</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Nacimiento</th>
                <th scope="col">Localidad</th>
                <th scope="col">Genero</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{$paciente->no_carne}}</td>
                <td>{{$paciente->dpi}}</td>
                <td>{{$paciente->nombres}}</td>
                <td>{{$paciente->apellidos}}</td>
                <td>{{$paciente->fecha_nac}}</td>
                <td>{{$paciente->localidad}}</td>
                <td>{{$paciente->genero}}</td>
                <td>{{$paciente->direccion}}</td>
                <td>
                    <div class="row">
                        <a href="{{url('/paciente/'.$paciente->no_carne.'/edit')}}" class="btn btn-warning"
                            style='margin-right: 1rem'>Editar</a>

                        <form method="post" action="{{url('/paciente/'.$paciente->no_carne)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar paciente?');"
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